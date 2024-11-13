<?php
/**
 * Blogs Block template.
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

$usps = get_field('usps') ?: [];

$no_padding_top = get_field('no_padding_top') ?: '';
?>
<section class="section section--default section--<?= $background_color; ?> <?php if($no_padding_top) { echo 'pt-0'; } ?>">
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
        <div class="usps">
            <div class="row row-gap-md">
                <?php 
                    foreach ($usps as $usp) { 
                ?>
                    <div class="col-md-4">
                        <div class="usps__item">
                            <div class="icon"><img src="<?= $usp['image']; ?>" alt="<?= $usp['title']; ?>"></div>
                            <div class="title"><?= $usp['title']; ?></div>
                            <div class="text"><?= $usp['text']; ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if($cta) { ?>
        <div class="section__cta">
            <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
        </div>
        <?php } ?>
    </div>
</section>