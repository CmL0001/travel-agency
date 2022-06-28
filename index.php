<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper">

			<h2><span><?php _e( 'Our Blog', 'html5blank' ); ?></span></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
