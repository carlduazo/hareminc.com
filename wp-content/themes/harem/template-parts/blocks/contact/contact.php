<?php
/**
 * Contact Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$background_color = get_field('background_color') ?: 'white';
$supertitle = get_field('supertitle') ?: '';
$title = get_field('title') ?: '';
$text = get_field('text') ?: '';
$contact_form_shortcode = get_field('contact_form_shortcode') ?: '';
$image = get_field('image') ?: '';
?>
<section class="section section--default section--<?= $background_color; ?> section--contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                <?php if($contact_form_shortcode) { ?>
                    <?= do_shortcode($contact_form_shortcode); ?>
                <?php } ?>
            </div>
            <?php if($image) { ?>
            <div class="col-md-4">
                <div class="image">
                    <img src="<?= $image; ?>" alt="<?= $title; ?>">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>