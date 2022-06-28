<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="wrapper">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- post title -->
		<h2><span><?php the_title(); ?></span></h2>
		<!-- /post title -->

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>	
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<?php 
				// dates
				$format = 'd F, Y';
				$date = strtotime(get_field('leaving_date'));
				$leavingDate = date_i18n($format, $date);

				$returningDate = strtotime(get_field('returning_date'));
				$returningDate = date_i18n($format, $returningDate);
			?>

			<div class="tour-information">
				<p><strong>Leaving and Returning Date:</strong> <?php echo $leavingDate . ' - ' . $returningDate ?></p>
				<p><strong>Location for Departure:</strong> <?php the_field('location'); ?></p>
				<p><strong>Availiable Seats:</strong> <?php the_field('availiable_seats'); ?></p>
				<p><strong>Price:</strong> <?php the_field('price'); ?></p>
			</div>
			
			<div class="itinerary">
				<?php the_field('travel_itinerary'); ?>
			</div>


			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

		<aside class="grid1-3">
			<h3>Gallery</h3>
			<?php the_content(); ?>
		</aside>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
