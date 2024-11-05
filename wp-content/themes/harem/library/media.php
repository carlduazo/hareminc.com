<?php
/**
 * Inline Low Quality Image Placeholder
 *
 * @param int   $img_id Attachment ID
 * @param array $classes CSS classnames
 * @param int   $size Unresponsive single image size
 * -------------------------------- */
function get_the_lqip($img_id = NULL, $classes = [], $orientation = false) {
  // Default to current post thumbnail id
  $img_id = is_null($img_id) ? get_post_thumbnail_id() : $img_id;
  if (empty($img_id)) return;

  $classes_str = (isset($classes[0]) ? ' ' . implode(' ', $classes) : '');

  $img_meta = wp_get_attachment_metadata($img_id);
  $orientation = $orientation === 'auto'
    ? $img_meta['width'] >= $img_meta['height'] ? 'landscape' : 'portrait'
    : $orientation;

  ob_start(); ?>

  <img
    data-srcset="<?= wp_get_attachment_image_srcset($img_id); ?>"
    data-sizes="auto"
    src="<?= wp_get_attachment_image_src($img_id, 'lqip')[0]; ?>"
    alt="<?= get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>"
    class="lqip<?php if ($orientation) echo  " lqip--$orientation"; ?> lazyload<?= $classes_str; ?>"/>

  <?php return ob_get_clean();
}

function the_lqip($img_id = NULL, $classes = [], $orientation = false) {
  echo get_the_lqip($img_id, $classes, $orientation);
}


/**
 * Inline Low Quality Image Placeholder as background-image
 *
 * @param int   $img_id Attachment ID
 * @param array $classes CSS classnames
 * @param int   $size Unresponsive single image size
 * -------------------------------- */
function get_the_lqip_background($img_id = NULL, $classes = []) {
  // Default to current post thumbnail id
  $img_id = is_null($img_id) ? get_post_thumbnail_id() : $img_id;
  if (empty($img_id)) return;

  $img_meta = wp_get_attachment_metadata($img_id);

  $classes_str = (isset($classes[0]) ? ' ' . implode(' ', $classes) : '');

  // Build the data attribute
  $data_background_srcset = [];

  // Full size
  $url = wp_get_attachment_image_src($img_id, 'full')[0];
  array_push($data_background_srcset, [
    "width" => intval($img_meta['width']),
    "height" => intval($img_meta['height']),
    "url"  => "{$url}.webp"
  ]);

  // Other sizes
  foreach (get_intermediate_image_sizes() as $image_size) {
    if (empty($img_meta['sizes'][$image_size])) continue;

    $url = wp_get_attachment_image_src($img_id, $image_size)[0];
    array_push($data_background_srcset, [
      "width" => intval($img_meta['sizes'][$image_size]['width']),
      "height" => intval($img_meta['sizes'][$image_size]['height']),
      "url"  => "{$url}.webp"
    ]);
  }

  ob_start(); ?>

  <div
    data-background-srcset="<?= htmlspecialchars(json_encode($data_background_srcset)); ?>"
    style="background-image: url(<?= wp_get_attachment_image_src($img_id, 'lqip')[0]; ?>);"
    class="background lqip-background lazyload js<?= $classes_str; ?>">
  </div>

  <?php return ob_get_clean();
}

function the_lqip_background($img_id = NULL, $classes = []) {
  echo get_the_lqip_background($img_id, $classes);
}


// Icons sprite
// --------------------------------
function the_icons_sprite() {
  $icons_sprite = get_assets_dir() . '/img/public/icons-sprite.svg';

  // Stop if there is no icons sprite
  if (!file_exists($icons_sprite)) return;

  echo '<div style="display: none !important;">';
    include($icons_sprite);
  echo '</div>';
}


// Print an icon
// --------------------------------
function the_icon($icon, $classes = []) {
  echo get_icon($icon, $classes);
}

function get_icon($icon, $classes = []) {
  $classes_str = isset($classes[0]) ? ' ' . implode(' ', $classes) : '';
  $icons_sprite = get_assets_dir() . '/img/public/icons-sprite.svg';
  ob_start(); ?>

  <svg class="icon<?= $classes_str; ?>">
    <use xlink:href="<?= $icons_sprite; ?>#<?= $icon; ?>"></use>
  </svg>

<?php return ob_get_clean();
}
