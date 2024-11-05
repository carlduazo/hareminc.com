<?php
// Register nav menu's
// --------------------------------
register_nav_menus([
	'primary' 	=> 'Primary menu',
	'primary-phablet' => 'Primary (phablet)',
	'footer' => 'Footer',
]);


/**
 * Get nav menu by location
 * @link https://goo.gl/St4MVB
 *
 * @param string $location
 * @return object $menu_object
 * -------------------------------- */
function get_menu_by_location($location) {
	// Get all locations
	$locations = get_nav_menu_locations();

	if (!array_key_exists($location, $locations)) return false;

	// Get object id by location
	$menu_object = wp_get_nav_menu_object($locations[$location]);

	// Return menu post objects
	return $menu_object;
}


/**
 * Get menu items
 *
 * @param string $location
 * @return array $menu_items
 * -------------------------------- */
function get_menu_items_by_location($location) {
	$menu_items = wp_get_nav_menu_items(get_menu_by_location($location));
	$menu_items = !empty($menu_items) ? $menu_items : [];

	return $menu_items;
}


/**
 * Filter menu items by parent id
 *
 * @param array $menu_items - Menu items to filter
 * @param int 	$location - Post ID of parent
 * @return array $menu_items
 * -------------------------------- */
function filter_menu_items_by_parent($menu_items, $parent) {
	$matching_menu_items = [];

	foreach ($menu_items as $menu_item) {
		if ($menu_item->menu_item_parent != $parent) continue;

		array_push($matching_menu_items, $menu_item);
	}

	return $matching_menu_items;
}
