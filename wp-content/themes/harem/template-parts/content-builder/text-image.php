<?php
/**
 * Creative image text Block template.
 *
 * @param array $block The block settings and attributes.
 */
// Load values and assign defaults.
$background_color = $content['background_color'] ?: 'white';
$supertitle = $content['supertitle'] ?: '';
$supertitle_style = $content['supertitle_style'] ?: 'primary';
$title = $content['title'] ?: '';
$section_header_color = $content['section_header_color'] ?: 'dark';
$text = $content['text'] ?: '';
$cta_style = $content['cta_style'] ?: 'white';
$cta = $content['cta'] ?: [];
$image = $content['image'] ?: [];
$layout = $content['layout'] ?: 'two-columns';
$content_position = $content['content_position'] ?: 'left';
?>
<section class="section section--product-description">
    <div class="container">
      <div class="row row-gap-md align-items-center <?php if($content_position == "right") { ?> flex-row-reverse <?php } ?>">
        <div class="col-md-6">
          <div class="section__header section__header--left mb-4 section__header--<?= $section_header_color; ?>">
              <?php if($supertitle) { ?>
              <div class="section__supertitle section__supertitle--<?= $supertitle_style; ?>">
                  <?= $supertitle; ?>
              </div>
              <?php } ?>
              <?php if($title) { ?>
              <div class="section__title section__title">
                  <?= $title; ?>
              </div>
              <?php } ?>
              <?php if($text) { ?>
              <div class="section__text rich-text">
                  <?= $text; ?>
              </div>
              <?php } ?>
          </div>
          <?php if($cta) { ?>
            <div class="section__cta section__cta--left mt-0">
                <a href="<?= $cta['url']; ?>" class="button button--<?= $cta_style; ?>"><?= $cta['title']; ?></a>
            </div>
          <?php } ?>
        </div>
        <div class="col-md-6">
            <div class="image">
                <img src="<?= $image['url']; ?>" alt="<?= $title; ?>" class="border-radius-rounded">
            </div>
        </div>
      </div>
    </div>

    
</section>