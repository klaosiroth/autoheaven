<?php
defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

/**
 * Define Constants
 */
define( 'THEME_VERSION', '1.0.0' ); // Set theme version.
define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * REQUIRED FILES
 * Include required files.
 */
require THEME_DIR . 'inc/class-theme-setup.php';
// require THEME_DIR . 'inc/helper.php';
// require THEME_DIR . 'inc/custom-header.php';
require THEME_DIR . 'inc/template-tags.php';
require THEME_DIR . 'inc/template-functions.php';
// require THEME_DIR . 'inc/customizer.php';
// require THEME_DIR . 'classes/class-theme-customizer.php';
