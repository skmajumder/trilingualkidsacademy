<?php

if ( class_exists( 'CSF' ) ):

	$prefix = 'theme_framework';

	// Create options
	CSF::createOptions( $prefix, array(
		'menu_title'      => 'Theme Options',
		'menu_slug'       => 'theme-options',
		'framework_title' => 'Theme Options',
		'menu_icon'       => 'dashicons-lightbulb',
	) );

	/**
	 * Header Tab Options
	 */

	// Create a Header Tab
	CSF::createSection( $prefix, array(
		'title' => 'Header Options',
		'id'    => 'newblog_header_tab',
		'icon'  => 'far fa-clone',
	) );

	CSF::createSection( $prefix, array(
		'parent' => 'newblog_header_tab',
		'title'  => 'Logo',
		'id'     => 'newblog-logo-section',
		'icon'   => 'fas fa-images',
		'fields' => array(
			array(
				'id'    => 'newblog-logo',
				'type'  => 'upload',
				'title' => 'Logo',
			),
		)
	) );

	CSF::createSection( $prefix, array(
		'parent' => 'newblog_header_tab',
		'title'  => 'Number',
		'id'     => 'newblog-number-section',
		'icon'   => 'fas fa-phone',
		'fields' => array(
			array(
				'id'    => 'newblog-number',
				'type'  => 'text',
				'title' => 'Number',
			),
		)
	) );

	/**
	 * Footer Tab Options
	 */

	// Create a Footer Tab
	CSF::createSection( $prefix, array(
		'title' => 'Footer Options',
		'id'    => 'newblog_footer_tab',
		'icon'  => 'far fa-clone',
	) );

	// Create Footer Copyright section (Footer Tab)
	CSF::createSection( $prefix, array(
		'parent' => 'newblog_footer_tab',
		'title'  => 'Copyright Text',
		'id'     => 'newblog-copyright-option',
		'icon'   => 'fas fa-copyright',
		'fields' => array(
			// A textarea field
			array(
				'title' => 'Copyright Text',
				'id'    => 'newblog-footer-copyright-text',
				'type'  => 'textarea',
			),
		)
	) );

	CSF::createSection( $prefix, array(
		'parent' => 'newblog_footer_tab',
		'title'  => 'Footer About',
		'id'     => 'newblog-footer-logo-section',
		'icon'   => 'fas fa-images',
		'fields' => array(
			array(
				'id'    => 'newblog-footer-logo',
				'type'  => 'upload',
				'title' => 'Footer Logo',
			),
			array(
				'id'    => 'newblog-footer-description',
				'type'  => 'textarea',
				'title' => 'Short Descriptions',
			),
			array(
				'id'    => 'newblog-footer-address',
				'type'  => 'textarea',
				'title' => 'Address',
			),
			array(
				'id'    => 'newblog-footer-email',
				'type'  => 'text',
				'title' => 'Email',
			),
			array(
				'id'    => 'newblog-footer-phone',
				'type'  => 'text',
				'title' => 'Phone Number',
			),
		)
	) );




endif;
