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
?>
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