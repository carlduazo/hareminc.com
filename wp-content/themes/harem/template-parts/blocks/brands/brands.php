<?php
/**
 * Brands Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$background_color = get_field('background_color') ?: 'transparent';
$supertitle = get_field('supertitle') ?: '';
$title = get_field('title') ?: '';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'white';
$cta = get_field('cta');
$brands = get_field('brands');
?>
<section class="section section--default section--<?= $background_color; ?> section--brands">
    <div class="container">
        <div class="section__header">
            <?php if($supertitle) { ?>
            <div class="section__supertitle">
                <?= $supertitle; ?>
            </div>
            <?php } ?>
            <?php if($title) { ?>
            <h2 class="section__title section__title">
                <?= $title; ?>
            </h2>
            <?php } ?>
            <?php if($text) { ?>
            <div class="section__text rich-text">
                <?= $text; ?>
            </div>
            <?php } ?>
        </div>
        <?php if($brands) { ?>
        <div class="brands">
            <div class="brands__nav owl-carousel js">
                <?php foreach($brands as $brand) {
                    $brand_image = get_field('logo', $brand);
                ?>
                <div class="item">
                    <img src="<?= $brand_image; ?>" alt="<?= get_the_title($brand); ?>">
                </div>
                <?php } ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="brands__slider owl-carousel js">
                        <?php foreach($brands as $brand) {
                            $brand_image = get_field('logo', $brand);
                            $brand_supertitle = get_field('tagline', $brand) ?: '';
                            $brand_title = get_the_title($brand) ?: '';
                            $brand_excerpt = get_the_excerpt($brand) ?: '';
                            $brand_link = get_permalink($brand) ?: '';

                            $home_image = get_field('home_image', $brand) ?: '';
                            $youtube_id = get_field('home_video_link', $brand) ?: '';
                        ?>
                            <div class="section section--brands-slider">
                                <div class="row row-gap-md row--section align-items-center">
                                    <div class="col-md-6">
                                        <div class="section__header section__header--left">
                                            <?php if($brand_supertitle) { ?>
                                            <div class="section__supertitle">
                                                <?= $brand_supertitle; ?>
                                            </div>
                                            <?php } ?>
                                            <?php if($brand_title) { ?>
                                            <h2 class="section__title section__title">
                                                <?= $brand_title; ?>
                                            </h2>
                                            <?php } ?>
                                            <?php if($brand_excerpt) { ?>
                                            <div class="section__text rich-text">
                                                <?= $brand_excerpt; ?>
                                            </div>
                                            <?php } ?>
                                        </div>

                                        <div class="section__cta section__cta--left">
                                            <a href="<?= $brand_link; ?>" class="button button--secondary"><?= __('Read more', 'harem'); ?></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="image-wrap">
                                            <div class="image">
                                                <img src="<?= $home_image; ?>" alt="<?= $brand_title; ?>">
                                            </div>
                                            <?php if($youtube_id) { ?>
                                                <a class="play-button button--show-video" data-video-link="<?= $youtube_id; ?>">
                                                <i class="icon icon-play"></i>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>