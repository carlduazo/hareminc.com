<?php
/**
 * Creative image text Block template.
 *
 * @param array $block The block settings and attributes.
 */
// Load values and assign defaults.
$background_color = get_field('background_color') ?: 'transparent';
$supertitle = get_field('supertitle') ?: '';
$supertitle_style = get_field('supertitle_style') ?: 'primary';
$title = get_field('title') ?: '';
$text = get_field('text') ?: '';
$cta_style = get_field('cta_style') ?: 'secondary';
$cta = get_field('cta') ?: [];
$content_position = get_field('content_position') ?: 'default';
$image = get_field('image') ?: [];
$image_style = get_field('image_style') ?: 'basic';
$layout = get_field('layout') ?: 'two-columns';
$numbers = get_field('numbers') ?: [];
$small_images = get_field('small_images') ?: [];
$youtube_id = get_field('youtube_video_link') ?: '';
?>
<section class="section section--default section--image-text section--<?= $background_color; ?>">
    <div class="container">
      <div class="row row--section align-items-center <?= $content_position; ?>">
        <div class="col-md-6">
          <div class="section__header  section__header--left section__header--<?= $section_header_color; ?>">
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
          <div class="section__cta section__cta--left">
              <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
          </div>
          <?php } ?>
          <div class="row numbers-images">
            <?php if($numbers) { ?>
            <div class="col-md-4">
              <div class="numbers">
                <?php
                  foreach($numbers as $number) {
                ?>
                <div class="numbers__item">
                  <div class="count"><?= $number['count']?></div>
                  <div class="title"><?= $number['title']?></div>
                </div>
                <?php } ?>
              </div>
            </div>
            <?php } ?>
            <?php if($small_images) { ?>
            <div class="col-md-8">
              <div class="row row--small-images">
                <?php
                  foreach($small_images as $small_image) {
                ?>
                <div class="col-md-6">
                  <div class="small-image">
                    <img src="<?= $small_image['image']; ?>" alt="<?= $title; ?>">
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>

        <div class="col-md-6">
            <div class="image-wrap image-wrap--<?= $image_style; ?>">
              <div class="image">
                <img src="<?= $image['url'] ?>" alt="<?= $title; ?>">
              </div>
              <?php if($youtube_id) { ?>
                <a class="play-button button--show-video" data-video-link="<?= $youtube_id; ?>">
                  <i class="icon icon-play"></i>
                </a>
              <?php } ?>
            </div>
          </div>
      </div>
    </div>
</section>