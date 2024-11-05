<?php
/**
 * Testimonials Block template.
 *
 * @param array $block The block settings and attributes.
 */
// Load values and assign defaults.
$background_color = get_field('background_color') ?: 'transparent';
$supertitle = get_field('supertitle') ?: '';
$title = get_field('title') ?: '';
$content_position = get_field('content_position') ?: 'default';
$image = get_field('image') ?: [];
$image_style = get_field('image_style') ?: 'basic';
$layout = get_field('layout') ?: 'two-columns';

$testimonials = get_field('testimonials') ?: [];
?>
<section class="section section--default section--image-text section--reviews section--<?= $background_color; ?>">
    <div class="container">
      <div class="row row--section align-items-center <?= $content_position; ?>">
        <div class="col-md-6">
          <div class="section__header  section__header--left">
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
          </div>
          <div class="section__quote">
            <img src="<?php echo get_theme_file_uri().'/assets/public/images/harem-testimonial-quote.svg'; ?>" alt="Harem testimonial quote" class="mb-0">
          </div>
          <?php if($testimonials) { ?>
            <div class="testimonials owl-carousel js">
              <?php foreach($testimonials as $testimonial) { ?>
                <div class="testimonials__item">
                    <div class="text">
                      <?= $testimonial['text']; ?>
                    </div>
                    <div class="reviewer">
                      <div class="image">
                        <img src="<?= $testimonial['image']; ?>" alt="<?= $testimonial['name']; ?>">
                      </div>
                      <div class="name-role">
                        <div class="name"><?= $testimonial['name']; ?></div>
                        <div class="role"><?= $testimonial['role']; ?></div>
                      </div>
                    </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
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