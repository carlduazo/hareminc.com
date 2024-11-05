<?php 
// 
/**
 * Template Name: Chaiwallah default template
 */
get_header(); ?>
	
<section class="section section--default section--white">
    <div class="container">
        <div class="section__header section__header--dark">
            <h2 class="section__title section__title">
                <?= get_the_title(); ?>
            </h2>
        </div>

		<div class="rich-text">
			<?php the_content(); ?>
		</div>
    </div>
</section>
<?php get_footer();
