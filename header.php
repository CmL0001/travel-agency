<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        
	</head>
	<body <?php body_class(); ?>>

		

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="navcanvas">

					<div class="wrapper">

						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->

					</div><!-- wrapper -->

				</div><!-- .navcanvas -->

					<?php if(is_home() && get_option('page_for_posts') ) : ?>
						<?php $featured = wp_get_attachment_image_src( get_post_thumbnail_id(get_option('page_for_posts')), 'full' ); ?>
						<?php $featured = $featured[0]; ?>
						<div class="featuredImage" style="background-image:url(<?php echo $featured ?>);"></div>
					<?php elseif(is_front_page()): ?>
						<section class="slider">
							<?php // @functions.php:12 ?>
							<?php do_action('slider_index'); ?>
						</section>
					<?php  else : ?>
						<?php $featured = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
						<?php $featured = $featured[0]; ?>
						<div class="featuredImage" style="background-image:url(<?php echo $featured ?>);"></div>
					<?php endif; ?>

			</header>
			<!-- /header -->

			<div class="wrapper">
			
			<div class="search-form clear">
				<?php get_template_part('searchform'); ?>
			</div>
