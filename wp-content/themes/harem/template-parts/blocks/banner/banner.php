<?php
/**
 * Banner Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$background_color = get_field('background_color') ?: 'transparent';
$supertitle = get_field('supertitle') ?: '';
$title = get_field('title') ?: '';
$image_title = get_field('image_title') ?: '';
$image = get_field('image') ?: '';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'white';
$cta = get_field('cta');
$banner_type = get_field('banner_type') ?: 'right-background';

$images = get_field('images') ?: [];
$no_padding_top = get_field('no_padding_top') ?: '';
?>

<?php if($banner_type == 'multiple-images') { ?>
<section class="section section--default pb-0 section--<?= $background_color; ?>">
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
    </div>

    <div class="banner-wrap">
        <div class="banner-images">
            <?php foreach($images as $image_item) { ?>
                <div class="banner-images__item">
                    <div class="image">
                    <img src="<?= $image_item; ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } elseif($banner_type == 'full-background') { ?>
    <section class="section section--default section--banner-full-bg section--<?= $background_color; ?> <?php if($no_padding_top) { echo 'pt-0'; } ?>">
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
    </div>

    <?php if($image) { ?>
    <div class="banner__image">
        <img src="<?= $image; ?>" alt="<?= $title; ?>">
    </div>
    <?php } ?>
</section>
<?php } else { ?>
<section class="section section--banner">
    <div class="banner">
        <div class="banner__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section__header">
                            <?php if($supertitle) { ?>
                            <div class="section__supertitle">
                                <?= $supertitle; ?>
                            </div>
                            <?php } ?>
                            <?php if(!$image_title) { ?>
                                <?php if($title) { ?>
                                <h2 class="section__title section__title">
                                    <?= $title; ?>
                                </h2>
                                <?php } ?>
                            <?php } ?>
                            <?php if($image_title) { ?>
                            <img src="<?= $image_title; ?>" alt="<?= $title; ?>" class="banner__image-title">
                            <?php } ?>
                            <?php if($text) { ?>
                            <div class="section__text rich-text">
                                <?= $text; ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($image) { ?>
        <div class="banner__image">
            <img src="<?= $image; ?>" alt="<?= $title; ?>">
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>