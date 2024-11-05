<?php
/**
 * Featured Categories Block template.
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

$categories = get_field('categories') ?: [];
?>
<section class="section section--default section--<?= $background_color; ?>">
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
    <div class="container container--featured-categories">
        <div class="featured-categories owl-carousel js">
            <?php 
                foreach ($categories as $category) { 
                    $category_link = $category['link'] ?: '#';
                    $category_background = $category['background'] ?: 'white';
                    $category_title_color = $category['title_color'] ?: 'dark';
                    $category_image = $category['image'] ?: [];
            ?>
                <a href="<?= $category_link; ?>" class="featured-categories__item color--<?= $category_title_color; ?>" style="background: <?= $category_background; ?>">
                    <div class="content">
                        <span><?= $category['title']; ?></span>
                        <div class="image">
                            <img src="<?= $category_image['url']; ?>" alt="<?= $category['title']; ?>">
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="container">
        <?php if($cta) { ?>
        <div class="section__cta">
            <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
        </div>
        <?php } ?>
    </div>
</section>