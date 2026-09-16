<?php

/**
 * Exercise the public Heartbeat and asset contract in a real WordPress site.
 *
 * This file is loaded by the centrally maintained integration runner after the
 * production plugin build has been activated.
 *
 * @package WP_Heart_ThrobTests
 */

defined( 'ABSPATH' ) || exit;

/**
 * Fail the smoke check with a useful diagnostic.
 *
 * @param bool   $condition Whether the expected behavior was observed.
 * @param string $message   Failure diagnostic.
 * @return void
 */
function wp_heart_throb_smoke_assert( $condition, $message ) {
	if ( ! $condition ) {
		throw new RuntimeException( $message );
	}
}

wp_heart_throb_smoke_assert( ! is_multisite(), 'WP Heart Throb must use the single-site pilot.' );
wp_heart_throb_smoke_assert( function_exists( 'wp_heart_throb_heartbeat_received' ), 'The production plugin did not load.' );
wp_heart_throb_smoke_assert( 10 === has_filter( 'heartbeat_received', 'wp_heart_throb_heartbeat_received' ), 'The Heartbeat response filter was not registered.' );
wp_heart_throb_smoke_assert( 99 === has_action( 'admin_bar_menu', 'wp_heart_throb_admin_bar_menu_item' ), 'The toolbar hook was not registered.' );

$existing = array( 'existing' => 'value' );
wp_heart_throb_smoke_assert( $existing === wp_heart_throb_heartbeat_received( $existing, array() ), 'Missing plugin data changed the Heartbeat response.' );
wp_heart_throb_smoke_assert(
	array( 'wp_heart_throb' => 'beat' ) === wp_heart_throb_heartbeat_received( array(), array( 'wp_heart_throb' => 'beat' ) ),
	'The beat acknowledgement was not returned.'
);

wp_heart_throb_enqueue_assets();
wp_heart_throb_smoke_assert( wp_script_is( 'heartbeat', 'enqueued' ), 'The WordPress Heartbeat script was not enqueued.' );
wp_heart_throb_smoke_assert( wp_script_is( 'wp-heart-throb', 'enqueued' ), 'The plugin script was not enqueued.' );
wp_heart_throb_smoke_assert( wp_style_is( 'wp-heart-throb', 'enqueued' ), 'The plugin stylesheet was not enqueued.' );
