<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'text-gray-900 bg-white dark:text-white dark:bg-gray-800 ' ); ?>>
	<?php wp_body_open(); ?>

	<header>
		<nav>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'container'      => false,
				)
			);
		?>
		</nav>
	</header>

	<main id="primary" class="max-w-7xl mx-auto px-4 pt-14 sm:px-6 sm:pt-24 lg:px-8" role="main">
		<header>
			<h1>บล็อก</h1>
		</header>

		<!-- <div class="grid lg:grid-cols-12 gap-5">
			<section class="lg:col-span-8 grid md:grid-cols-2 gap-x-4 gap-y-8">
				<div class="">
					<img src="https://via.placeholder.com/1200x630" alt="Feature image">
					<h2>Title</h2>
					<div class="text-sm">11 Jan 2022</div>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima accusantium nesciunt ratione! Aliquam, esse maiores.</p>
				</div>
				<div class="">
					<img src="https://via.placeholder.com/1200x630" alt="Feature image">
					<h2>Title</h2>
					<div class="text-sm">11 Jan 2022</div>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima accusantium nesciunt ratione! Aliquam, esse maiores.</p>
				</div>
				<div class="">
					<img src="https://via.placeholder.com/1200x630" alt="Feature image">
					<h2>Title</h2>
					<div class="text-sm">11 Jan 2022</div>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima accusantium nesciunt ratione! Aliquam, esse maiores.</p>
				</div>
				<div class="">
					<img src="https://via.placeholder.com/1200x630" alt="Feature image">
					<h2>Title</h2>
					<div class="text-sm">11 Jan 2022</div>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima accusantium nesciunt ratione! Aliquam, esse maiores.</p>
				</div>
				<div class="">
			</section>
			<aside class="lg:col-span-4">SIDEBAR</aside>
		</div> -->

		<div class="flex flex-wrap">
			<div class="md:w-2/3">CONTENT</div>
			<div class="md:w-1/3">SIDEBAR</div>
		</div>

		<?php
			// if ( have_posts() ) :

			// 	while ( have_posts() ) :
			// 		the_post();

			// 		/*
			// 		* Include the Post-Type-specific template for the content.
			// 		* If you want to override this in a child theme, then include a file
			// 		* called content-___.php (where ___ is the Post Type name) and that will be used instead.
			// 		*/
			// 		get_template_part( 'template-parts/content', get_post_type() );

			// 	endwhile;

			// else :

			// 	get_template_part( 'template-parts/content', 'none' );

			// endif;
		?>

	</main>

	<footer role="">
		<div class="text-sm">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
