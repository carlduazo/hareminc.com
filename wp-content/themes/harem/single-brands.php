<?php get_header(); ?>
<?php
	$brand_color = get_field('brand_color', $post->ID) ?: '#D99D02';
?>

<style>
    .section--social-links .button--social{
        border-color: <?= $brand_color; ?>;
        color: <?= $brand_color; ?>;
    }

    .section--social-links .button--social:hover{
        border-color: <?= $brand_color; ?>;
        color: white;
        background-color: <?= $brand_color; ?>;
    }

	.section__supertitle,
	.accordion-group.accordion-group--locations .accordion.accordion-active .accordion-title h3,
	.accordion-group.accordion-group--locations .accordion .accordion-title .icon,
	.locations__meta .icon,
	.services__item .meta__title {
        color: <?= $brand_color; ?>;
    }

	.locations__cities .city.tab-title-active {
		background-color: <?= $brand_color; ?>;
	}

	.locations__cities .city.tab-title-active:before {
		border-color: transparent transparent transparent <?= $brand_color; ?>;;
	}

	.play-button {
		background-color: <?= $brand_color; ?>;
	}

	.play-button:hover {
		background-color: <?= $brand_color; ?>;
		filter: brightness(90%); 
	}

	.section__cta .button {
		background-color: <?= $brand_color; ?>;
	}

	.section__cta .button--white {
		background-color: <?= $brand_color; ?>;
		color: white;
	}

	.section__cta .button:hover {
		background-color: <?= $brand_color; ?>;
		filter: brightness(90%); 
	}

	.owl-dots button.owl-dot {
		border-color: <?= $brand_color; ?>;
	}

	.owl-dots button.owl-dot.active {
		border-color: <?= $brand_color; ?>;
		background-color: <?= $brand_color; ?>; 
	}
</style>
	<?php the_content(); ?>
<?php get_footer();
