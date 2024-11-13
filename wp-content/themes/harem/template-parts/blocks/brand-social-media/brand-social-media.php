<?php
/**
 * Social media Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
global $post;
$background_color = get_field('background_color') ?: 'transparent';
$supertitle = get_field('supertitle') ?: '';
$title = get_field('title') ?: '';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'outline-secondary';
$cta = get_field('cta') ?: [];

$social_media_links = get_field('social_media_links', $post->ID);
$brand_color = get_field('brand_color', $post->ID) ?: '#D99D02';
?>

<section class="section section--default section--social-links section--<?= $background_color; ?>">
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
            <div class="section__links mb-0">
                <?php foreach($social_media_links as $social_media_link) { ?>
                    <a href="<?= $social_media_link['link']; ?>" class="button button--rounded button--social" style="--brand-color: <?= $brand_color; ?>;"><i class="icon icon-<?= $social_media_link['social_media']; ?>"></i></a>
                <?php } ?>
            </div>
            <?php if($cta) { ?>
            <div class="section__cta mt-4">
                <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
            </div>
            <?php } ?>
        </div>
</section>