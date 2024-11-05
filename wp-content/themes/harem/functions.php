<?php

if( !session_id() ) {
  session_start();
}

$style_dir = get_stylesheet_directory();

// Configuration files
// --------------------------------
foreach (glob($style_dir . '/library/*.php') as $file) {
  require_once($file);
}

// WooCommerce files
// --------------------------------
foreach (glob($style_dir . '/library/woocommerce/*.php') as $file) {
  require_once($file);
}

/**
 * Epic register blocks
 * 
 * Register gutenberg blocks from blocks folder
 * All registered blocks will be used i.c.w. ACF
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function epic_register_blocks() {
  /**
   * We register our block's with WordPress's handy
   * register_block_type();
   *
   * @link https://developer.wordpress.org/reference/functions/register_block_type/
   */
  register_block_type( __DIR__ . '/template-parts/blocks/blogs' );
  register_block_type( __DIR__ . '/template-parts/blocks/contact' );
  register_block_type( __DIR__ . '/template-parts/blocks/featured-categories' );
  register_block_type( __DIR__ . '/template-parts/blocks/featured-products' );
  register_block_type( __DIR__ . '/template-parts/blocks/featured-video' );
  register_block_type( __DIR__ . '/template-parts/blocks/hero-slider' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/brands' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/brand-locations' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/company-location' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/banner' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/cta' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/image-text' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/testimonials' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/services' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/brand-social-media' ); //harem
  register_block_type( __DIR__ . '/template-parts/blocks/social-media' );
  register_block_type( __DIR__ . '/template-parts/blocks/usps' );
  register_block_type( __DIR__ . '/template-parts/blocks/videos' );
}
add_action( 'init', 'epic_register_blocks' );

function enqueue_jquery_script() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_jquery_script');