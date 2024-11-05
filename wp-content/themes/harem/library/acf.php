<?php
    // Advanced Custom Fields plugin config
    // --------------------------------
    if (function_exists('acf_add_options_page')) {
        // Add general options
        acf_add_options_page([
            'page_title' 	=> 'Harem Settings',
            'menu_title'	=> 'Harem Settings',
            'menu_slug' 	=> 'harem-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ]);
    }
?>