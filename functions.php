<?php
/**
 * Startup Goa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Startup_Goa
 */

include("inc/custom-posts.php");
include("inc/custom-taxonomies.php");

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
