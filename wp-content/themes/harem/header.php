<!doctype html>
<!--
Site made by

███████╗██████╗ ██╗ ██████╗ ██████╗ ██████╗ ███████╗   ███╗   ██╗██╗
██╔════╝██╔══██╗██║██╔════╝██╔═══██╗██╔══██╗██╔════╝   ████╗  ██║██║
█████╗  ██████╔╝██║██║     ██║   ██║██║  ██║█████╗     ██╔██╗ ██║██║
██╔══╝  ██╔═══╝ ██║██║     ██║   ██║██║  ██║██╔══╝     ██║╚██╗██║██║
███████╗██║     ██║╚██████╗╚██████╔╝██████╔╝███████╗██╗██║ ╚████║███████╗
╚══════╝╚═╝     ╚═╝ ╚═════╝ ╚═════╝ ╚═════╝ ╚══════╝╚═╝╚═╝  ╚═══╝╚══════╝
-->
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://www.youtube.com/iframe_api"></script>
		
	</head>

	<body <?php body_class(); ?>>
		<?php
		wp_body_open(); ?>

		<div class="overlay js"></div>

  	<header class="header">
		<?php
			get_template_part('template-parts/navigation/lasktop');
		?>
  	</header>
