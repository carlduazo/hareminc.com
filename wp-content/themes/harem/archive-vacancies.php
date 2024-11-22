<?php
// 
/**
 * Template Name: Vacancies
 */
get_header(); 
// Get all published blog posts
$args = array(
    'post_type'      => 'vacancies',
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

$vacancies = get_field('vacancies', 'options');
$company = get_field('company', 'options');

?>
	<section class="section section--default">
        <div class="container">
            <div class="section__header">
                <div class="section__supertitle">
                    <?= __('Harem careers','harem'); ?>
                </div>
                <h1 class="section__title">
                    <?= $vacancies['title']; ?>
                </h1>
                <div class="section__text rich-text">
                    <?= $vacancies['text']; ?>
                </div>
            </div>
            <div class="row row-gap-md">
                <div class="col-md-8">
                    <?php if($posts) { ?>
                        <div class="accordion-group js">
                            <?php foreach ($posts as $index => $post) {
                                setup_postdata($post);
                                $content= get_the_content();   
                                $links = get_field('links', $post->ID);
                            ?>
                            <div class="accordion js <?php if($index== 0) { echo "accordion-active"; } ?>">
                                <div class="accordion-title js">
                                    <h2><?php the_title(); ?></h2>
                                    <i class="icon icon-plus"></i>
                                </div>
                                <div class="accordion-content js" style="<?php if($index== 0) { echo "display: block;"; } ?>">
                                    <div class="rich-text">
                                        <?= $content; ?>
                                    </div>
                                    <?php if($links) { ?>
                                    <div class="links mt-4">
                                        <div class="links__title"><?= __('Apply via', 'harem'); ?></div>
                                        <?php foreach($links as $link) {
                                            $item = $link['link'];
                                        ?>
                                            <a href="<?= $item['url']; ?>" class="button button--outline-primary"><?= $item['title']; ?></a>
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-4">
                    <div class="custom-panel custom-panel--info">
                        <h2><?= $vacancies['info_title']; ?></h2>
                        <div class="rich-text"><?= $vacancies['info_text']; ?></div>
                        <div class="company">
                            <?php if($company['contact_number']) { ?>
                            <div class="company__info">
                                <div class="title"><?= __('Contact number', 'harem'); ?></div>
                                <div class="value"><?= $company['contact_number']; ?></div>
                            </div>
                            <?php } ?>
                            <?php if($company['email']) { ?>
                            <div class="company__info">
                                <div class="title"><?= __('Email address', 'harem'); ?></div>
                                <div class="value"><a href="mailto:<?= $company['email']; ?>"><?= $company['email']; ?></a></div>
                            </div>
                            <?php } ?>
                            <?php if($company['address']) { ?>
                            <div class="company__info">
                                <div class="title"><?= __('Office address', 'harem'); ?></div>
                                <div class="value rich-text"><?= $company['address']; ?></div>
                            </div>
                            <?php } ?>
                            <?php if($company['office_hours']) { ?>
                            <div class="company__info">
                                <div class="title"><?= __('Office hours', 'harem'); ?></div>
                                <div class="value"><?= $company['office_hours']; ?></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <?php if($vacancies['banner']) { ?>
            <img src="<?= $vacancies['banner']; ?>" alt="<?= $vacancies['title']; ?>" class="img-fluid w-100">
        <?php } ?>
    </section>
<?php get_footer();

