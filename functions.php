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
 * Codestar Framework
 */

require_once get_theme_file_path() . '/lib/codestar-framework/codestar-framework.php';
require_once get_theme_file_path() . '/lib/codestar-framework/option.php';

/**
 * Enable Theme Support
 */

require_once get_theme_file_path( './inc/functions/theme-support.php' );

/**
 *  theme assets
 */

require_once get_theme_file_path( './inc/functions/theme-assets.php' );

/**
 * CPT
 */

require_once get_theme_file_path( './inc/functions/theme-cpt.php' );

/**
 * Custom function
 */

require_once get_theme_file_path( './inc/functions/theme-custom-function.php' );