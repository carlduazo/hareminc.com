<?php
/**
 * Hero slider Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$hero_sliders = get_field('hero_sliders') ?: [];
?>
<section class="section section--hero hero js owl-carousel">
    <?php 
        foreach($hero_sliders as $hero_slider) {
            $supertitle = $hero_slider['supertitle'] ?: '';
            $title = $hero_slider['title'] ?: '';
            $text = $hero_slider['text'] ?: '';
            $supertitle_style = $hero_slider['supertitle_style'] ?: 'primary';
            $content_color = $hero_slider['content_color'] ?: 'dark';
            $content_position = $hero_slider['content_position'] ?: 'left';
            $cta_style = $hero_slider['cta_style'] ?: 'white';
            $cta = $hero_slider['cta'] ?: [];
            $background = $hero_slider['background'] ?: 'image';
            $background_has_overlay = $hero_slider['background_has_overlay'];
    ?>
    <div class="hero__item">
        <div class="hero__content">
            <div class="content">
                <div class="container container--<?= $content_position; ?>">
                    <div class="wrap color--<?= $content_color; ?>">
                        <?php if($supertitle) { ?>
                        <div class="section__supertitle section__supertitle--<?= $supertitle_style; ?>">
                            <?= $supertitle; ?>
                        </div>
                        <?php } ?>
                        <?php if($title) { ?>
                        <h1 class="section__title section__title--hero title-hero <?php if($background == 'video') { echo "text-center"; }  ?>">
                            <?= $title; ?>
                        </h1>
                        <?php } ?>
                        <?php if($text) { ?>
                        <div class="section__text rich-text">
                            <?= $text; ?>
                        </div>
                        <?php } ?>
                        <?php if($cta) { ?>
                        <div class="section__cta">
                            <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?> button--large"><?= $cta['title']; ?></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__media">

            <?php if($background_has_overlay) { ?>
                <div class="background-overlay"></div>
            <?php } ?>
            <?php if($background == 'video') { ?>
                <video loop="loop" muted  playsinline autoplay src="<?= $hero_slider['video']['url']; ?>" alt=""></video>
            <?php } else { ?>
                <img src="<?= $hero_slider['image']; ?>" alt="">
            <?php } ?>

            <?php if($hero_slider['image_background_mobile']) { ?>
            <img src="<?= $hero_slider['image_background_mobile']; ?>" alt="" class="image-mobile">
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</section>