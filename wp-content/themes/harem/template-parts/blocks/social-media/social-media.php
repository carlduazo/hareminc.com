<?php
/**
 * Social media Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$background_color = get_field('background_color') ?: 'white';
$supertitle = get_field('supertitle') ?: '';
$supertitle_style = get_field('supertitle_style') ?: 'primary';
$title = get_field('title') ?: '';
$section_header_color = get_field('section_header_color') ?: 'white';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'white';
$cta = get_field('cta') ?: [];

$images = get_field('images') ?: [];
$social_media_links = get_field('social_media_links', 'options');
?>
<section class="section section--default section--pdb-0 section--<?= $background_color; ?>">
        <div class="container">
            <div class="section__header section__header--<?= $section_header_color; ?>">
                <?php if($supertitle) { ?>
                <div class="section__supertitle section__supertitle--<?= $supertitle_style; ?>">
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
            <div class="section__links">
                <?php foreach($social_media_links as $social_media_link) { ?>
                    <a href="<?= $social_media_link['link']; ?>" class="button button--square button--<?= $social_media_link['social_media']; ?>"><i class="icon icon-<?= $social_media_link['social_media']; ?>"></i></a>
                <?php } ?>
            </div>
        </div>
        <div class="gallery-images js owl-carousel">
            <?php foreach($images as $image) { ?>
            <div class="gallery-images__item">
                <img src="<?= $image?>" alt="<?= $title; ?>">
            </div>
            <?php } ?>
        </div>
        <?php if($cta) { ?>
        <div class="section__cta">
            <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
        </div>
        <?php } ?>
</section>