<?php

/**
 * Theme Assets Version Number
 */

define( 'VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Active TGM Plugin
 */
require_once get_theme_file_path( './inc/tgm.php' );

/**
 * Enable trilingualkidsacademy Theme Support
 */

require_once get_theme_file_path( './inc/functions/theme-support.php' );

/**
 * trilingualkidsacademy theme assets
 */