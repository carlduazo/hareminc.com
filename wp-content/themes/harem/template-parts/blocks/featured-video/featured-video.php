<?php
/**
 * Videos Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$supertitle = get_field('supertitle') ?: '';
$supertitle_style = get_field('supertitle_style') ?: 'primary';
$title = get_field('title') ?: '';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'white';
$cta = get_field('cta') ?: [];

$api_key = "AIzaSyAIQ0-cP-2UUkU6FXM6ac_joGJL4_5MnxM";

$video = get_field('youtube_id') ?: '';
$poster = get_field('poster') ?: '';
?>

<section class="section section--featured-video">
    <div class="overlay_bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section__header section__header--left section__header--white">
                    <?php if($supertitle) { ?>
                    <div class="section__supertitle section__supertitle--secondary">
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
                <div class="section__cta">
                    <a class="button button--primary button--show-video js" data-video-link="<?= $video; ?>"><?= __('Start watching'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="video-poster">
        <?php if($poster) { ?>
            <img src="<?= $poster; ?>" alt="<?= $title; ?>">
        <?php } else { ?>
            <img src="https://img.youtube.com/vi/<?= $video; ?>/hqdefault.jpg" alt="">
        <?php } ?>
    </div>
</section>
