<?php
/**
 * Get a template with variables
 *
 * @param string $path - Path to template relative to template directory
 * @param array  $data - Array of variables for use in template
 *
 * @return string - The template if template exists
 * -------------------------------- */
function get_template_with_vars($path, $vars = []) {
    extract($vars);
  
    // Locate and include template
    $template = locate_template("$path.php");
    if ($template === '') wp_die("Template not found: $path");
  
    include($template);
  }
  

  
/**
 * Content builder
 * -------------------------------- */
function the_content_builder() {
    $rows = get_field('content-builder');
    $row_count = !empty( $rows ) ? count( $rows ) : 0;
  
    if ( $rows) {
      foreach ( $rows as $row_index => $row ) {
        $row['row_index'] = $row_index;
        get_template_with_vars( "template-parts/content-builder/{$row['acf_fc_layout']}", $row );
      }
    }
  }