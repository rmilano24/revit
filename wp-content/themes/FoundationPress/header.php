<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./slick/slick.css">
  		<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


<header class="site-header" role="banner">
	<div class="grid-container">
			<nav class="site-navigation top-bar" role="navigation">
				<div class="top-bar-left">
					<div class="site-desktop-title top-bar-title">
					<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/revit-logo.png" alt="Revit"></a>
					</div>
				</div>
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>
	
					<!-- <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?> -->
				</div>
			</nav>
	</div>
</header>