<?php 
function cptui_register_my_cpts() {
	/**
	 * Post Type: Brands.
	 */

	$labels = array(
        'name'               => _x( 'Brands', 'post type general name', 'harem' ),
        'singular_name'      => _x( 'Brand', 'post type singular name', 'harem' ),
        'menu_name'          => _x( 'Brands', 'admin menu', 'harem' ),
        'name_admin_bar'     => _x( 'Brand', 'add new on admin bar', 'harem' ),
        'add_new'            => _x( 'Add New', 'brand', 'harem' ),
        'add_new_item'       => __( 'Add New Brand', 'harem' ),
        'new_item'           => __( 'New Brand', 'harem' ),
        'edit_item'          => __( 'Edit Brand', 'harem' ),
        'view_item'          => __( 'View Brand', 'harem' ),
        'all_items'          => __( 'All Brands', 'harem' ),
        'search_items'       => __( 'Search Brands', 'harem' ),
        'parent_item_colon'  => __( 'Parent Brands:', 'harem' ),
        'not_found'          => __( 'No brands found.', 'harem' ),
        'not_found_in_trash' => __( 'No brands found in Trash.', 'harem' )
    );

	 $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'brands' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true, // Enables Gutenberg editor for this post type
    );

	register_post_type( 'brands', $args );

    /**
	 * Post Type: Vacancies.
	 */

	$labels = array(
        'name'               => _x( 'Brands', 'post type general name', 'harem' ),
        'singular_name'      => _x( 'Brand', 'post type singular name', 'harem' ),
        'menu_name'          => _x( 'Brands', 'admin menu', 'harem' ),
        'name_admin_bar'     => _x( 'Brand', 'add new on admin bar', 'harem' ),
        'add_new'            => _x( 'Add New', 'brand', 'harem' ),
        'add_new_item'       => __( 'Add New Brand', 'harem' ),
        'new_item'           => __( 'New Brand', 'harem' ),
        'edit_item'          => __( 'Edit Brand', 'harem' ),
        'view_item'          => __( 'View Brand', 'harem' ),
        'all_items'          => __( 'All Brands', 'harem' ),
        'search_items'       => __( 'Search Brands', 'harem' ),
        'parent_item_colon'  => __( 'Parent Brands:', 'harem' ),
        'not_found'          => __( 'No brands found.', 'harem' ),
        'not_found_in_trash' => __( 'No brands found in Trash.', 'harem' )
    );

	 $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'brands' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true, // Enables Gutenberg editor for this post type
    );

	register_post_type( 'brands', $args );

    $labels = array(
        'name'               => _x( 'Vacancies', 'post type general name', 'harem' ),
        'singular_name'      => _x( 'Vacancy', 'post type singular name', 'harem' ),
        'menu_name'          => _x( 'Vacancies', 'admin menu', 'harem' ),
        'name_admin_bar'     => _x( 'Vacancy', 'add new on admin bar', 'harem' ),
        'add_new'            => _x( 'Add New', 'vacancy', 'harem' ),
        'add_new_item'       => __( 'Add New Vacancy', 'harem' ),
        'new_item'           => __( 'New Vacancy', 'harem' ),
        'edit_item'          => __( 'Edit Vacancy', 'harem' ),
        'view_item'          => __( 'View Vacancy', 'harem' ),
        'all_items'          => __( 'All Vacancies', 'harem' ),
        'search_items'       => __( 'Search Vacancies', 'harem' ),
        'parent_item_colon'  => __( 'Parent Vacancies:', 'harem' ),
        'not_found'          => __( 'No vacancies found.', 'harem' ),
        'not_found_in_trash' => __( 'No vacancies found in Trash.', 'harem' )
    );

	$args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'vacancies' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => false, // Enables Gutenberg editor for this post type
    );

	register_post_type( 'vacancies', $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
?>