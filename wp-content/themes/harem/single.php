<?php 
    get_header(); 
    global $post;
    $author_id = $post->post_author;
    $thumbnail_id = get_post_thumbnail_id( $post->ID );
    $display_name = get_the_author_meta('display_name', $author_id);
    $first_name = get_the_author_meta('first_name', $author_id);
    $last_name = get_the_author_meta('last_name', $author_id);
    $author_image_id = get_the_author_meta('profile_image_id', $author_id);

    $content = remove_divi_shortcodes(apply_filters('the_content', get_the_content()));
    $content_clean = wp_strip_all_tags(remove_divi_shortcodes(apply_filters('the_content', get_the_content())));
    $word_count = str_word_count($content_clean);
    $reading_time = ceil($word_count / 200); // Average reading speed of 200 words per minute
    $categories = get_the_category();
?>
<section class="section section--white blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            if ( ! empty( $categories ) ) {
                            echo "<div class='blog__categories'>";
                                foreach ( $categories as $category ) {
                        ?>
                            <span class="tag">
                                <?= esc_html( $category->name ); ?>
                            </span>
                        <?php    
                                }
                            echo "</div>";
                            }
                        ?>
                        <h1 class="blog__title">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <div class="col-md-2">
                        <div class="blog__author-meta">
                            <div class="blog__author">
                                <div class="image">
                                    <?php 
                                        if($author_image_id) { 
                                            the_lqip($author_image_id);
                                        } else {
                                            echo "<img src= '".get_theme_file_uri()."/assets/public/images/default-avatar.png'/>";
                                        }
                                    ?>
                                </div>
                                <div class="name">
                                    <?php
                                        if($display_name) {
                                            echo $display_name;
                                        } else {
                                            echo $first_name.' '.$last_name;
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="blog__meta">
                                <div class="item">
                                    <i class="icon icon-calendar"></i>
                                    <span><?= get_the_date(); ?></span>
                                </div>
                                <div class="item">
                                    <i class="icon icon-clock"></i>
                                    <span>
                                        <?php echo $reading_time.' '.__('min', 'harem'); ?><?php echo ($reading_time > 1) ? 's' : ''; ?> <?= __('read', 'harem'); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="blog__image">
                            <?php the_lqip($thumbnail_id); ?>
                        </div>
                        <div class="rich-text">
                            <?php echo $content; ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php
                            echo do_shortcode('[Sassy_Social_Share]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    get_template_part('template-parts/global/related-blogs');
?>
    
<?php get_footer();
