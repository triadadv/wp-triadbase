<?php
// The following enable theme support for post thumbnails and menus
add_theme_support( 'post_thumbnails' );
add_theme_support( 'menus' );

// ACTIONS
function triad_theme_styles() {
	wp_enqueue_style( 'global_css', get_template_directory_uri().'/style.css' );
	if( is_front_page() ) {
		wp_enqueue_style( 'home_css', get_template_directory_uri().'/css/home.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'triad_theme_styles' );

function triad_theme_scripts() {
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri().'/js/modernizr.js' );
	wp_enqueue_script( 'global_js', get_template_directory_uri().'/js/global.js', array( 'jquery' ) );
	if( is_front_page() ) {
		wp_enqueue_script( 'home_js', get_template_directory_uri().'/js/home.js', array( 'jquery' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'triad_theme_scripts' );
?>