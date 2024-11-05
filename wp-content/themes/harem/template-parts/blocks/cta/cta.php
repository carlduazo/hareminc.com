<?php
/**
 * Featured products Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$layout = get_field('layout') ?: 'basic';
$background_color = get_field('background_color') ?: 'transparent';
$supertitle = get_field('supertitle') ?: '';
$title = get_field('title') ?: '';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'white';
$cta = get_field('cta') ?: [];
$products = get_field('products') ?: [];
$image_left = get_field('image_left') ?: '';
$image_right = get_field('image_right') ?: '';
$background_image = get_field('background_image') ?: '';
?>
<section class="section section--default section--<?= $background_color; ?> section--cta section--<?= $layout; ?>" style="<?php if($layout == "background_image") { ?>background-image: url(<?= $background_image['url']; ?>) <?php } ?>">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <?php if($layout == 'image_text_image' && $image_left) { ?>
            <div class="col-md-3">
                <div class="image">
                    <img src="<?= $image_left; ?>" alt="<?= $title; ?>">
                </div>
            </div>
            <?php } ?>
            <div class="col-md-6">
                <?php if($layout == 'background_image') { ?>
                <div class="cta-container">
                <?php } ?>
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
                    <?php if($cta) { ?>
                    <div class="section__cta">
                        <a href="<?= $cta['url']; ?>" class="button button--secondary"><?= $cta['title']; ?></a>
                    </div>
                    <?php } ?>
                <?php if($layout == 'background_image') { ?>
                </div>
                <?php } ?>
            </div>
            <?php if($layout == 'image_text_image' && $image_right) { ?>
            <div class="col-md-3">
                <div class="image">
                    <img src="<?= $image_right; ?>" alt="<?= $title; ?>">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>