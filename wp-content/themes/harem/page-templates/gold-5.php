<?php
// 
/**
 * Template Name: Gold 5
 */
get_header(); 
?>
<style>
    .button--secondary,
    a.button--secondary,
    .play-button {
        background-image: linear-gradient(to right, #333333 0%, #000000 100%); /* Medium black to full black */
        border: 4px solid; /* Thick border */
        border-image: linear-gradient(to right, #BB8721 0%, #DCBA55 25%, #DCBA55 50%, #BB8721 100%); /* Border matches the button gradient */
        border-image-slice: 1; /* Ensures border gradient is applied properly */


        background-size: 200% auto;
    }

    .button--secondary:hover,
    a.button--secondary:hover,
    .play-button:hover { 
        background-image: linear-gradient(to right, #1f1f1f 0%, #101010 100%); /* Slightly darker black gradient on hover */
        border-image: linear-gradient(to right, #9C7420 0%, #C6A245 25%, #C6A245 50%, #9C7420 100%); /* Darker border gradient on hover */
        background-position: right center; /* Reverses gradient direction on hover */
    }

    .section__title,
    .count {
        background-image: linear-gradient(to right, #BB8721 0%, #DCBA55 25%, #DCBA55 50%, #BB8721 100%);
        background-size: 200% auto;
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

