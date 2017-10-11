<?php
/**
 * Description
 *
 * @package     CameraSki
 * @since       1.0.0
 * @author      Carles Goodvalley
 * @link        https://cameraski.com
 * @license     GNU General Public License 2.0+
 */

namespace CameraSki;

/**
 * Loads non admin files.
 *
 * @since   1.0.0
 *
 * @return void
 */
function load_nonadmin_files() {

	$filenames = array(
		'setup.php',
		'components/customizer/css-handler.php',
		'components/customizer/helpers.php',
		'functions/formatting.php',
		'functions/load-assets.php',
		'functions/markup.php',
		'structure/archive.php',
		'structure/comments.php',
		'structure/footer.php',
		'structure/header.php',
		'structure/menu.php',
		'structure/post.php',
		'structure/sidebar.php',
		//'woocommerce/woocommerce-setup.php',
		//'woocommerce/woocommerce-css-handler.php',
		//'woocommerce/woocommerce-notice.php',
	);

	load_specified_files( $filenames );

}

add_action( 'admin_init', __NAMESPACE__ . '\load_admin_files' );
/**
 * Loads admin files.
 *
 * @since   1.0.0
 *
 * @return void
 */
function load_admin_files() {

	$filenames = array(
		'components/customizer/customizer.php',
	);

	load_specified_files( $filenames );

}

/**
 * Load each of the specified files.
 *
 * @since   1.0.0
 *
 * @param array $filenames
 * @param string $folder_root
 *
 * @return void
 */
function load_specified_files( array $filenames, $folder_root = '' ) {

	$folder_root = $folder_root ?: CHILD_THEME_DIR . '/lib/';

	foreach ( $filenames as $filename ) {

		include( $folder_root . $filename );

	}

}

load_nonadmin_files();

// Setup Theme.
//include_once( CHILD_THEME_DIR . '/lib/theme-defaults.php' );

// Add the helper functions.
//include_once( CHILD_THEME_DIR . '/lib/helpers.php' );

// Add Image upload and Color select to WordPress Theme Customizer.
//require_once( CHILD_THEME_DIR . '/lib/customizer.php' );

// Include Customizer CSS.
//include_once( CHILD_THEME_DIR . '/lib/css-handler.php' );

// Add WooCommerce support.
//include_once( CHILD_THEME_DIR . '/lib/woocommerce/woocommerce-setup.php' );

// Add the required WooCommerce styles and Customizer CSS.
//include_once( CHILD_THEME_DIR . '/lib/woocommerce/woocommerce-css-handler.php' );

// Add the Genesis Connect WooCommerce notice.
//include_once( CHILD_THEME_DIR . '/lib/woocommerce/woocommerce-notice.php' );