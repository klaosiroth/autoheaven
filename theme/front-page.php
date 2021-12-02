<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<?php
		// if ( has_custom_logo( 'the_custom_logo' ) ) {
		// 	the_custom_logo();
		// }
		?>
	</header>

	<main id="primary" class="max-w-7xl mx-auto px-4 pt-14 sm:px-6 sm:pt-24 lg:px-8">
		<header>
			<h1>บล็อก</h1>
		</header>

		<div class=""></div>

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

	<?php wp_footer(); ?>
</body>
</html>
