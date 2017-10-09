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

add_action( 'genesis_setup', __NAMESPACE__ . '\setup_child_theme', 15 );
/**
 * Setup Child Theme
 *
 * @since   1.0.0
 *
 * @return void
 */
function setup_child_theme() {

	add_theme_supports();
	add_new_image_sizes();

}

add_action( 'after_setup_theme', __NAMESPACE__ . 'genesis_sample_localization_setup' );
/**
 * Setup Localization
 *
 * @since   1.0.0
 *
 * @return void
 */
function genesis_sample_localization_setup(){

	load_child_theme_textdomain( CHILD_TEXT_DOMAIN, CHILD_THEME_DIR . '/languages' );

}

/**
 * Adds Theme supports to the Site.
 *
 * @since   1.0.0
 *
 * @return void
 */
function add_theme_supports() {

	$confif = array(
		'html5' => array(
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form'
		),
		'genesis-accessibility' => array(
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links'
		),
		'genesis-responsive-viewport' => null,
		'custom-header' => array(
			'width'           => 600,
			'height'          => 160,
			'header-selector' => '.site-title a',
			'header-text'     => false,
			'flex-height'     => true,
		),
		'custom-background' => null,
		'genesis-after-entry-widget-area' => null,
		'genesis-footer-widgets' => 3,
		'genesis-menus' => array(
			'primary'   => __( 'After Header Menu', CHILD_TEXT_DOMAIN ),
			'secondary' => __( 'Footer Menu', CHILD_TEXT_DOMAIN )
		),
	);

	// 'html5'                          -> Add HTML5 markup structure.
	// 'genesis-accessibility'          ->Add Accessibility support.
	// 'genesis-responsive-viewport'    -> Add viewport meta tag for mobile browsers.
	// 'custom-header'                  -> Add support for custom header.
	// 'custom-background'              -> Add support for custom background.
	// 'genesis-after-entry-widget-area'-> Add support for after entry widget.
	// 'genesis-footer-widgets'         -> Add support for 3-column footer widgets.
	// 'genesis-menus'                  -> Rename primary and secondary navigation menus.

	foreach ( $config as $feature => $args ) {

		add_theme_support( $feature, $args );

	}

}

/**
 * Adds new image sizes.
 *
 * @since   1.0.0
 *
 * @return void
 */
function add_new_image_sizes() {

	add_image_size( 'featured-image', 720, 400, TRUE );

}