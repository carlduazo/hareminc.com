<?php
// 
/**
 * Template Name: Gold 2
 */
get_header(); 
?>
<style>
    .button--secondary,
    a.button--secondary,
    .play-button {
        background-image: linear-gradient(to right, #F1C27D 0%, #D4AF37 100%); /* Light gold to medium-light gold */
        background-size: 200% auto;
    }

    .button--secondary:hover,
    a.button--secondary:hover,
    .play-button:hover { 
        background-position: right center; /* Reverses gradient direction on hover */
    }

    .section__title,
    .count {
        background-image: linear-gradient(to right, #cba367 0%, #ba982a 100%);
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

