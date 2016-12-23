<?php

/**
 * Heart Throb Assets
 *
 * @package Plugins/HeartThrob/Assets
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue CSS & JS
 *
 * @since 1.0.0
 */
function wp_heart_throb_enqueue_assets() {

	// Vars
	$url = wp_heart_throb_get_plugin_url();
	$ver = wp_heart_throb_get_asset_version();

	// Enqueue the heartbeat API
	wp_enqueue_script( 'heartbeat' );

	// Styles
	wp_enqueue_style( 'wp-heart-throb', $url . 'assets/css/wp-heart-throb.css',  array(), $ver );

	// Scripts
	wp_enqueue_script( 'wp-heart-throb', $url . 'assets/js/wp-heart-throb.js',   array(), $ver, true );
}
