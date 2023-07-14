<?php

function trilingualkidsacademy_assets(): void {
	wp_enqueue_style( 'theme-style', get_theme_file_uri( '/assets/css/style.css' ), '', fileatime( get_template_directory() . '/assets/css/style.css' ), 'all' );
	wp_enqueue_style( 'responsive', get_theme_file_uri( '/assets/css/responsive.css' ), '', fileatime( get_template_directory() . '/assets/css/responsive.css' ), 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), null, VERSION, 'all' );

	wp_enqueue_script( 'plugin', get_theme_file_uri( '/assets/js/plugin.js' ), array( 'jquery' ), fileatime( get_template_directory() . '/assets/js/plugin.js' ), true );
	wp_enqueue_script( 'countto', get_theme_file_uri( '/assets/js/countto.js' ), array( 'jquery' ), fileatime( get_template_directory() . '/assets/js/countto.js' ), true );
	wp_enqueue_script( 'wow', get_theme_file_uri( '/assets/js/wow.min.js' ), array( 'jquery' ), fileatime( get_template_directory() . '/assets/js/wow.min.js' ), true );
	wp_enqueue_script( 'owl-carousel', get_theme_file_uri( '/assets/js/owl.carousel.min.js' ), array( 'jquery' ), fileatime( get_template_directory() . '/assets/js/owl.carousel.min.js' ), true );
	wp_enqueue_script( 'owl-thumbs', get_theme_file_uri( '/assets/js/owl.carousel2.thumbs.js' ), array( 'jquery' ), fileatime( get_template_directory() . '/assets/js/owl.carousel2.thumbs.js' ), true );
	wp_enqueue_script( 'main', get_theme_file_uri( '/assets/js/main.js' ), array( 'jquery' ), fileatime( get_template_directory() . '/assets/js/main.js' ), true );
	wp_enqueue_script( 'shortcodes', get_theme_file_uri( '/assets/js/shortcodes.js' ), array( 'jquery' ), fileatime( get_template_directory() . '/assets/js/shortcodes.js' ), true );
	wp_enqueue_script( 'magnific-popup', get_theme_file_uri( '/assets/js/jquery.magnific-popup.min.js' ), array( 'jquery' ), fileatime( get_template_directory() . '/assets/js/jquery.magnific-popup.min.js' ), true );
}

add_action( 'wp_enqueue_scripts', 'trilingualkidsacademy_assets' );