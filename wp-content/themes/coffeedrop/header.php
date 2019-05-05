<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoffeeDrop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coffeedrop' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg static-top">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-1.svg" alt="coffee drop company logo">
				</a>
				<button class="navbar-toggler mobile-menu-toggle" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/bars-solid.svg" alt="mobile menu icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<?php wp_nav_menu(); ?>
				</ul>
				</div>
			</div>
		</nav>
		<div id="mobile-menu">
			<div id="mobile-menu-header" class="navbar">
				<div class="container">
					<a class="navbar-brand float-left" href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-1.svg" alt="coffee drop company logo">
					</a>
					<button class="navbar-toggler mobile-menu-toggle float-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/times.svg" alt="mobile menu icon"></span>
					</button>
				</div>
			</div>
			<?php wp_nav_menu(); ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
