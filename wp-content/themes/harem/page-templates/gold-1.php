<?php
// 
/**
 * Template Name: Gold 1
 */
get_header(); 
?>
<style>
    .button--secondary,
    a.button--secondary,
    .play-button {
        background-image: linear-gradient(to right, #F9D76B 0%, #E4B03D 100%); /* Yellowish gold to medium gold */
        background-size: 200% auto;
        color: #854A97;
    }

    .play-button .icon {
        color: #854A97;
    }

    .button--secondary:hover,
    a.button--secondary:hover,
    .play-button:hover { 
        background-position: right center; /* Reverses gradient direction on hover */
        color: #854A97;
    }

    .section__title,
    .count {
        color: #ad8c29 !important; /* Text color is transparent to show the gradient */
        /* font-weight: bold; */
    }

    .section__supertitle {
        color: #854A97;
    }
</style>
	<?php the_content(); ?>
<?php get_footer();

