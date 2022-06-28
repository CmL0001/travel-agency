<?php 
/** 
*  Template Name: Testimonials
**/
get_header(); 
?>

	<main role="main">
		<!-- section -->
		<section class="testimonials-wrapper">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<h2><span><?php the_title(); ?></span></h2>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

			<div class="testimonial-section">
				<?php 

				$args = array(

					'post_type' => 'testimonial',
					'posts_per_page' => -1,
					'orderby' => 'date',
					'order'  => 'DESC',

				); ?>
				<ul class="testimonial-list">
					<?php $testimonial = new WP_Query($args); while($testimonial->have_posts()): $testimonial->the_post(); ?>

					<li>
						<h3><?php the_title(); ?></h3>
						<div class="testimonial-content quote">
							<?php the_content(); ?>
						</div>
						<div class="from-testimonial">
							<p><?php the_field('person_name'); ?></p>
							<p><?php the_field('from'); ?></p>
						</div>
					</li>

					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
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
