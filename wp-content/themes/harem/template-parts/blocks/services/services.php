<?php
/**
 * Blogs Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
global $post;
$background_color = get_field('background_color') ?: 'white';
$supertitle = get_field('supertitle') ?: '';
$supertitle_style = get_field('supertitle_style') ?: 'primary';
$title = get_field('title') ?: '';
$section_header_color = get_field('section_header_color') ?: 'white';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'white';
$cta = get_field('cta') ?: [];
$services = get_field('services', $post->ID);
?>
<section class="section section--default section--<?= $background_color; ?>">
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
        <div class="services owl-carousel js">
            <?php foreach($services as $service) { ?>
            <div class="services__item">
                <div class="image">
                    <?php the_lqip($service['image']); ?>
                </div>
                <div class="meta">
                    <div class="meta__title">
                        <?= $service['title']; ?>
                    </div>
                    <div class="meta__text">
                        <?= $service['text']; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php if($cta) { ?>
        <div class="section__cta">
            <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
        </div>
        <?php } ?>
    </div>
</section>