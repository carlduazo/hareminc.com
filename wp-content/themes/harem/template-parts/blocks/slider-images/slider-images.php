<?php
/**
 * Social media Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$background_color = get_field('background_color') ?: 'dark';
$supertitle = get_field('supertitle') ?: '';
$supertitle_style = get_field('supertitle_style') ?: 'primary';
$title = get_field('title') ?: '';
$section_header_color = get_field('section_header_color') ?: 'white';
$text = get_field('text') ?: '';

$slider_images = get_field('slider_images') ?: [];
?>
<section class="section section--default section--<?= $background_color; ?>">
    <div class="container">
        <div class="section__header mb-4">
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
    </div>
    <div class="container" style="max-width: 900px;">
    <?php if($slider_images) { ?>
    <div class="gallery-images gallery-images--partners js owl-carousel js">
        <?php foreach($slider_images as $slider_image) { ?>
        <div class="gallery-images__item">
            <img src="<?= $slider_image; ?>">
        </div>
        <?php } ?>
    </div>
    <?php } ?>
    </div>
</section>