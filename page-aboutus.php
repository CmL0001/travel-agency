<?php 
/*
* Template Name: About Us
*/
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear wrapper">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<h2><span><?php the_title(); ?></span></h2>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

			<div class="about-us-images grid1-3 omega">

					<?php if(get_field('image_1')) { ?>
						<div class="photo">
							<?php $image_id = get_field('image_1'); ?>

							<?php echo wp_get_attachment_image( $image_id, 'medium', false, array('class' => 'polaroid') ); ?>
						</div>
					<?php } ?>

					<?php if(get_field('image_2')) { ?>
						<div class="photo">
							<?php $image_id = get_field('image_2'); ?>

							<?php echo wp_get_attachment_image( $image_id, 'medium', false, array('class' => 'polaroid') ); ?>
						</div>
					<?php } ?>
						
			</div>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
