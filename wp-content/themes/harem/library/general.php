<?php
    function remove_divi_shortcodes( $content ) {
        $content = preg_replace('/\[\/?et_pb.*?\]/', '', $content);
        return $content;
    }

    function add_viewport_meta_tag() {
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    }
    add_action('wp_head', 'add_viewport_meta_tag');
    
?>