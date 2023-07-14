<?php

/**
 * Theme Assets Version Number
 */

define( 'VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Active TGM Plugin
 */
require_once get_theme_file_path( './inc/tgm.php' );