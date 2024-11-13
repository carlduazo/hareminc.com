<?php
/**
* Enqueue Epicode Stylesheet
*/
function epicode_enqueue_customs() {

//   wp_enqueue_style('font-awesome-css',  get_theme_file_uri() . '/assets/font-awesome/css/fontawesome.css', '');
  wp_enqueue_style('fancy-box-css',  get_theme_file_uri() . '/assets/public/plugins/jquery.fancybox.css', '', filemtime(get_theme_file_path() . '/assets/public/plugins/jquery.fancybox.css'));
  wp_enqueue_script('fancy-box-js', get_theme_file_uri() . '/assets/public/plugins/jquery.fancybox.min.js', '', filemtime(get_theme_file_path() . '/assets/public/plugins/jquery.fancybox.min.js' ),'','',true);
  wp_enqueue_style('icomoon-css',  get_theme_file_uri() . '/assets/icomoon/style.css', '', filemtime(get_theme_file_path() . '/assets/icomoon/style.css'));
  wp_enqueue_style('vendor-css',  get_theme_file_uri() . '/assets/dist/vendor.css', '', filemtime(get_theme_file_path() . '/assets/dist/vendor.css' ));
  wp_enqueue_script('vendor',  get_theme_file_uri() . '/assets/dist/vendor.js', '', filemtime(get_theme_file_path() . '/assets/dist/vendor.js'),'','',true);
//   wp_enqueue_script('transition', get_theme_file_uri() . '/assets/public/plugins/transition.min.js', '', filemtime(get_theme_file_path() . '/assets/js/plugins/transition.min.js' ),'','',true);
//   wp_enqueue_script('dimmer', get_theme_file_uri() . '/assets/public/plugins/dimmer.min.js', '', filemtime(get_theme_file_path() . '/assets/js/plugins/dimmer.min.js' ),'','',true);
  wp_enqueue_style('app-css', get_theme_file_uri() . '/assets/dist/app.css', '', filemtime(get_theme_file_path() . '/assets/dist/app.css' ));
  wp_enqueue_script('app-js', get_theme_file_uri() . '/assets/dist/app.js', '', filemtime(get_theme_file_path() . '/assets/dist/app.js' ),'','',true);
}

/**
* Enqueue Custom Stylesheet at wp_print_styles
*/
add_action('wp_enqueue_scripts', 'epicode_enqueue_customs', 9999999 );

// Add basic theme support
// --------------------------------
function egm_theme_support() {
	// Switch default core markup for search form, comment form,
	// and comments to output valid HTML5
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	] );

	// Add menu support
	add_theme_support( 'menus' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );

	// RSS thingy
	add_theme_support( 'automatic-feed-links' );

	// WooCommerce
	add_theme_support('woocommerce', [
		'thumbnail_image_width' => 240,
		'single_image_width' => 480,
	]);

	// Add language file support
	load_theme_textdomain( 'shush', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'egm_theme_support' );


