<?php
// 
/**
 * Template Name: Gold 3
 */
get_header(); 
?>
<style>
    .button--secondary,
    a.button--secondary,
    .play-button {
        background-image: linear-gradient(to right, #D4AF37 0%, #8B6A2F 51%, #D4AF37 100%); /* True Gold to Dark Gold */
        background-size: 200% auto;
    }

    .button--secondary:hover,
    a.button--secondary:hover,
    .play-button:hover { 
        background-position: right center; /* Reverses gradient direction on hover */
    }

    .section__title,
    .count {
        background-image: linear-gradient(to right, #C79C3D 0%, #8E6A30 100%); /* Slightly darker gold gradient */
        -webkit-background-clip: text; /* Apply gradient to text */
        background-clip: text; /* For modern browsers */
        color: transparent !important; /* Text color is transparent to show the gradient */
        /* font-weight: bold; */
    }

    .section__supertitle {
        color: #854A97;
    }
</style>
	<?php the_content(); ?>
<?php get_footer();

