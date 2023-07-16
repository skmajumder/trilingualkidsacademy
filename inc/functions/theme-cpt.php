<?php

// Register Custom Post Type Section
function create_trilingualkidsacademy_cpt(): void {

	$sectionLabels = array(
		'name'                  => _x( 'Sections', 'Post Type General Name', 'trilingualkidsacademy' ),
		'singular_name'         => _x( 'Section', 'Post Type Singular Name', 'trilingualkidsacademy' ),
		'menu_name'             => _x( 'Sections', 'Admin Menu text', 'trilingualkidsacademy' ),
		'name_admin_bar'        => _x( 'Section', 'Add New on Toolbar', 'trilingualkidsacademy' ),
		'archives'              => __( 'Section Archives', 'trilingualkidsacademy' ),
		'attributes'            => __( 'Section Attributes', 'trilingualkidsacademy' ),
		'parent_item_colon'     => __( 'Parent Section:', 'trilingualkidsacademy' ),
		'all_items'             => __( 'All Sections', 'trilingualkidsacademy' ),
		'add_new_item'          => __( 'Add New Section', 'trilingualkidsacademy' ),
		'add_new'               => __( 'Add New', 'trilingualkidsacademy' ),
		'new_item'              => __( 'New Section', 'trilingualkidsacademy' ),
		'edit_item'             => __( 'Edit Section', 'trilingualkidsacademy' ),
		'update_item'           => __( 'Update Section', 'trilingualkidsacademy' ),
		'view_item'             => __( 'View Section', 'trilingualkidsacademy' ),
		'view_items'            => __( 'View Sections', 'trilingualkidsacademy' ),
		'search_items'          => __( 'Search Section', 'trilingualkidsacademy' ),
		'not_found'             => __( 'Not found', 'trilingualkidsacademy' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'trilingualkidsacademy' ),
		'featured_image'        => __( 'Featured Image', 'trilingualkidsacademy' ),
		'set_featured_image'    => __( 'Set featured image', 'trilingualkidsacademy' ),
		'remove_featured_image' => __( 'Remove featured image', 'trilingualkidsacademy' ),
		'use_featured_image'    => __( 'Use as featured image', 'trilingualkidsacademy' ),
		'insert_into_item'      => __( 'Insert into Section', 'trilingualkidsacademy' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Section', 'trilingualkidsacademy' ),
		'items_list'            => __( 'Sections list', 'trilingualkidsacademy' ),
		'items_list_navigation' => __( 'Sections list navigation', 'trilingualkidsacademy' ),
		'filter_items_list'     => __( 'Filter Sections list', 'trilingualkidsacademy' ),
	);

	$sectionArgs = array(
		'label'               => __( 'Section', 'trilingualkidsacademy' ),
		'description'         => __( '', 'trilingualkidsacademy' ),
		'labels'              => $sectionLabels,
		'menu_icon'           => 'dashicons-grid-view',
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'          => array(),
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => false,
		'has_archive'         => false,
		'hierarchical'        => false,
		'exclude_from_search' => true,
		'show_in_rest'        => false,
		'publicly_queryable'  => false,
		'capability_type'     => 'post',
		'rewrite'             => false,
	);
	register_post_type( 'section', $sectionArgs );

	$programLabels = array(
		'name'                  => _x( 'Programs', 'Post Type General Name', 'trilingualkidsacademy' ),
		'singular_name'         => _x( 'Program', 'Post Type Singular Name', 'trilingualkidsacademy' ),
		'menu_name'             => _x( 'Programs', 'Admin Menu text', 'trilingualkidsacademy' ),
		'name_admin_bar'        => _x( 'Program', 'Add New on Toolbar', 'trilingualkidsacademy' ),
		'archives'              => __( 'Program Archives', 'trilingualkidsacademy' ),
		'attributes'            => __( 'Program Attributes', 'trilingualkidsacademy' ),
		'parent_item_colon'     => __( 'Parent Program:', 'trilingualkidsacademy' ),
		'all_items'             => __( 'All Programs', 'trilingualkidsacademy' ),
		'add_new_item'          => __( 'Add New Program', 'trilingualkidsacademy' ),
		'add_new'               => __( 'Add New', 'trilingualkidsacademy' ),
		'new_item'              => __( 'New Program', 'trilingualkidsacademy' ),
		'edit_item'             => __( 'Edit Program', 'trilingualkidsacademy' ),
		'update_item'           => __( 'Update Program', 'trilingualkidsacademy' ),
		'view_item'             => __( 'View Program', 'trilingualkidsacademy' ),
		'view_items'            => __( 'View Programs', 'trilingualkidsacademy' ),
		'search_items'          => __( 'Search Program', 'trilingualkidsacademy' ),
		'not_found'             => __( 'Not found', 'trilingualkidsacademy' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'trilingualkidsacademy' ),
		'featured_image'        => __( 'Featured Image', 'trilingualkidsacademy' ),
		'set_featured_image'    => __( 'Set featured image', 'trilingualkidsacademy' ),
		'remove_featured_image' => __( 'Remove featured image', 'trilingualkidsacademy' ),
		'use_featured_image'    => __( 'Use as featured image', 'trilingualkidsacademy' ),
		'insert_into_item'      => __( 'Insert into Program', 'trilingualkidsacademy' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Program', 'trilingualkidsacademy' ),
		'items_list'            => __( 'Programs list', 'trilingualkidsacademy' ),
		'items_list_navigation' => __( 'Programs list navigation', 'trilingualkidsacademy' ),
		'filter_items_list'     => __( 'Filter Programs list', 'trilingualkidsacademy' ),
	);

	$programArgs = array(
		'label'               => __( 'Program', 'trilingualkidsacademy' ),
		'description'         => __( '', 'trilingualkidsacademy' ),
		'labels'              => $programLabels,
		'menu_icon'           => 'dashicons-awards',
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'hierarchical'        => true,
		'exclude_from_search' => false,
		'show_in_rest'        => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'program', $programArgs );

}

add_action( 'init', 'create_trilingualkidsacademy_cpt' );