<?php
/**
 * Plugin Name:  WP Heart Throb
 * Plugin URI:   http://wordpress.org/plugins/wp-heart-throb/
 * Description:  Shows a beating heart in your toolbar for each tick of the heartbeat API
 * Author:       John James Jacoby
 * Author URI:   https://jjj.blog
 * Version:      1.0.1
 * Requires PHP: 7.3
 * License:      GPLv2 or later
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Includes
 *
 * @since 1.0.0
 */
function _wp_heart_throb() {

	// Get the plugin path
	$plugin_path = plugin_dir_path( __FILE__ ) . 'wp-heart-throb/';

	// Common files
	require_once $plugin_path . 'includes/assets.php';
	require_once $plugin_path . 'includes/common.php';
	require_once $plugin_path . 'includes/hooks.php';
}
add_action( 'plugins_loaded', '_wp_heart_throb' );

/**
 * Return the plugin URL
 *
 * @since 1.0.0
 *
 * @return string
 */
function wp_heart_throb_get_plugin_url() {
	return plugin_dir_url( __FILE__ ) . 'wp-heart-throb/';
}

/**
 * Return the asset version
 *
 * @since 1.0.0
 *
 * @return int
 */
function wp_heart_throb_get_asset_version() {
	return 201701030001;
}
