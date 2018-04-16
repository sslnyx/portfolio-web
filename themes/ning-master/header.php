<?php
/**
 * The header for our theme.
 *
 * @package ning_master_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	
				<div class="site-branding">
					<div class="my-name">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1>ning</h1></a>
</div>
						<div class="hamburger-containor visible-xs">
					<div class="hamburger hamburger--elastic" tabindex="0"
						 aria-label="Menu" role="button" aria-controls="navigation">
						 
  					<div class="hamburger-box">
    					<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>

</div><!-- .site-branding -->

<div class="hamburger-containor hidden-xs">
					<div class="hamburger hamburger--elastic" tabindex="0"
						 aria-label="Menu" role="button" aria-controls="navigation">
						 
  					<div class="hamburger-box">
    					<div class="hamburger-inner"></div>
						</div>
					</div>
</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>


</nav>

		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">


			</header><!-- #masthead -->
			<div id="content" class="site-content">
