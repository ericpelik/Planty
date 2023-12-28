<?php
/**
 * Enqueue child styles.
 */
function child_enqueue_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' ); // Remove the // from the beginning of this line if you want the child theme style.css file to load on the front end of your site.

/**
 * Add custom functions here
 */
