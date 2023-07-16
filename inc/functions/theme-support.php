<?php
if ( ! function_exists( 'trilingualkidsacademy_theme_support' ) ):

	function trilingualkidsacademy_theme_support(): void {
		load_theme_textdomain( 'trilingualkidsacademy' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'wp-block-styles' );
		add_editor_style( './assets/css/editor-style.css' );
		add_image_size('thumb80', 80, 80);

		/**
		 * Enable HTML5
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
			'comment-list',
			'comment-form',
			'navigation-widgets'
		) );

		/**
		 * Menu Register
		 */
		register_nav_menus( array(
			'topMenuLocation'    => esc_html__( 'Top Menu', 'trilingualkidsacademy' ),
			'footerMenuLocation' => esc_html__( 'Footer Menu', 'trilingualkidsacademy' ),
		) );
	}

	add_action( 'after_setup_theme', 'trilingualkidsacademy_theme_support' );
endif;