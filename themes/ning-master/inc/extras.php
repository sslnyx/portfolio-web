<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package ning_master_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ning_master_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'ning_master_body_classes' );

function hero_style_front() {
	if (! is_front_page() ) {
			return;
	}
					$imagef = CFS()->get( 'hero_image' );
					$banner_css = ".page-template-default .site-header{
							background: 
							linear-gradient(to bottom, rgba(255,255,255,0) 60%,rgba(255,255,255,1) 100%),
							url({$imagef}) no-repeat center bottom;
							background-size: cover, cover;
						}";
					wp_add_inline_style ('ning-master-style', $banner_css);
	}
add_action( 'wp_enqueue_scripts', 'hero_style_front');