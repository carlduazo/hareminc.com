<?php
/**
 * Brand Locations Block template.
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
$timeline = get_field('timeline') ?: [];

?>
<section class="section section--default section--<?= $background_color; ?> section--timeline">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="sticky-text">
                <div class="section__header section__header--left">
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
                    <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
                </div>
                <?php } ?>
                </div>
            </div>
            <div class="col-md-7">
                <?php if($timeline) { ?>
                    <div class="timeline">
                    <?php foreach($timeline as $timeline_item) { ?>
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <?php if($timeline_item['date']) { ?>
                            <div class="date">
                                <?= $timeline_item['date']; ?>
                            </div>
                            <?php } ?>
                            <?php if($timeline_item['title']) { ?>
                            <div class="title">
                                <?= $timeline_item['title']; ?>
                            </div>
                            <?php } ?>
                            <?php if($timeline_item['text']) { ?>
                            <div class="text">
                                <?= $timeline_item['text']; ?>
                            </div>
                            <?php } ?>
                        </div>
                        <?php if($timeline_item['image']) { ?>
                        <a data-fancybox="timeline-gallery" href="<?= $timeline_item['image']; ?>" class="timeline__image" data-caption="<?= htmlspecialchars($timeline_item['text']); ?>">
                            <img src="<?= $timeline_item['image']; ?>" alt="">
                        </a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<div class="sticky-push"></div>