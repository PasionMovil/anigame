<?php
	/* Template Name: Full width no titulo */
?>
<?php get_header(); ?>

			<!-- BEGIN MAIN -->
			<div id="fullwidth">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			
				
				<div class="post-entry">
					<?php the_content(); ?>
				</div>
				
				<?php endwhile; endif; ?>
			
			</div>
			<!-- END MAIN -->
			
<?php get_footer(); ?>