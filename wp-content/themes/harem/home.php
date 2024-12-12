<?php
get_header(); 
// Get all published blog posts
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => -1,
    'status'         => 'published',
    'orderby'        => 'post_date',
    'order'          => 'DESC',
    'suppress_filters' => false,
    'lang'           => apply_filters('wpml_current_language', null), // Get the current language
);

$categories = get_categories(array(
    'taxonomy'   => 'category',
    'hide_empty' => true, // Only show categories with posts
));

$posts = get_posts($args);

?>
	<section class="section section--default section--white">
        <div class="container">
            <div class="section__header">
                <div class="section__supertitle">
                    <?= __('News','harem'); ?>
                </div>
                <h1 class="section__title">
                    <?= __('Insightful Reads','harem'); ?>
                </h1>
                <div class="section__text rich-text">
                    <?= __('Dive into Insightful Reads, where every article and blog is a journey of discovery, designed to ignite curiosity and expand your perspective.','harem'); ?>
                </div>
            </div>
            <?php
                // Display category buttons
            if ($categories) {
                echo '<div class="blogs__filter isotope-filter">';
                ?>
                <label for="all" data-filter="*" id="all_data">
                    <input type="radio" name="blog_category" id="all" value="all"/>
                    <span  class="button button--outline-primary" ><?= __('All', 'harem'); ?></span>
                    </label>
                <?php
                foreach ($categories as $category) {
                    // Output a button for each category
                    echo '<label for="blog_category_'.$category->slug.'" data-filter=".blog_category_'.$category->slug.'">' . ' <input type="radio" id="blog_category_'. $category->slug . '" name="blog_category" value="blog_category_'. $category->slug . '"/> <span class="button button--outline-primary">'.esc_html($category->name).'</span></label>';
                }
                echo '</div>';
            }
            ?>
            <div class="blogs blogs--default">
                <div class="row isotope-row blogs__row js">
                <?php 
                    if ($posts) {
                        foreach ($posts as $post) {
                            setup_postdata($post); 
                            $thumbnail_id = get_post_thumbnail_id($post->ID);
                            $excerpt = get_the_excerpt();
                            $content= wp_strip_all_tags(remove_divi_shortcodes(apply_filters('the_content', get_the_content())));
                            $word_count = str_word_count($content);
                            $reading_time = ceil($word_count / 200); // Average reading speed of 200 words per minute
                            $post_categories = get_the_category($post->ID);
                            $category_names = array();

                            // Create a comma-separated string of category names
                            foreach ($post_categories as $category) {
                                $category_names[] = 'blog_category_'.$category->slug; // Use slug for better filtering
                            }
                            $data_filter_value = implode(' ', $category_names);
                            ?>
                            <div class="col-md-3 blogs__col isotope-item js <?php echo esc_attr($data_filter_value); ?>">
                                <div class="blogs__item">
                                    <a href="<?php the_permalink(); ?>" class="image">
                                        <span class="badge reading-time"><?php echo $reading_time.' '.__('min', 'harem'); ?><?php echo ($reading_time > 1) ? 's' : ''; ?> <?= __('read', 'harem'); ?></span>
                                        <?php the_lqip($thumbnail_id); ?>   
                                    </a>
                                    <div class="meta">
                                        <a href="<?= $link; ?>" class="meta__title">
                                            <?php the_title(); ?>
                                        </a>
                                        

                                        <a href="<?= $link; ?>" class="meta__text">
                                            <?php 
                                                if (!empty($excerpt)) {
                                                    // Display the excerpt
                                                    echo $excerpt;
                                                } else {
                                                    // Display the full content if the excerpt is empty
                                                    echo $content;
                                                }
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        // Reset post data after the loop
                        wp_reset_postdata();
                    } else {
                        echo '<p>No posts found.</p>';
                    }
                ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();

