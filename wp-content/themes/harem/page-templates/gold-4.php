<?php
// 
/**
 * Template Name: Gold 4
 */
get_header(); 
?>
<style>
    .button--secondary,
    a.button--secondary,
    .play-button {
        background-image: linear-gradient(to right, #BB8721 0%, #DCBA55 25%, #DCBA55 50%, #BB8721 100%);
        background-size: 100% auto;
    }

    .button--secondary:hover,
    a.button--secondary:hover,
    .play-button:hover { 
        background-image: linear-gradient(to right, #9C7420 0%, #C6A245 25%, #C6A245 50%, #9C7420 100%);
        background-size: 200% auto;
        background-position: right center; /* Reverses gradient direction on hover */
    }

    .section__title,
    .count {
        background-image: linear-gradient(to right, #BB8721 0%, #d4b454 25%, #d4b454 25%, #BB8721 100%);
        background-size: 100% auto;
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

