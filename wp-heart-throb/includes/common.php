<?php

/**
 * Heart Throb Common Functions
 *
 * @package Plugins/HeartThrob/Common
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Build the "Notifications" dropdown.
 *
 * @since 1.9.0
 *
 * @return bool
 */
function wp_heart_throb_admin_bar_menu_item() {

	// Bail if not logged in
	if ( ! is_user_logged_in() ) {
		return false;
	}

	// Add the top-level Notifications button.
	$GLOBALS['wp_admin_bar']->add_menu( array(
		'parent' => 'top-secondary',
		'id'     => 'wp-heart-throb',
		'title'  => '<span class="ab-icon"></span>',
		'href'   => '#'
	) );
}

/**
 * Maybe add the heart-throb beat to the response
 *
 * @since 1.0.0
 *
 * @param array $response
 * @param array $data
 *
 * @return array
 */
function wp_heart_throb_heartbeat_received( $response, $data ) {
	if ( empty( $data['wp_heart_throb'] ) ) {
		return $response;
	}

    // Add the beat
    if ( $data['wp_heart_throb'] === 'beat' ) {
        $response['wp_heart_throb'] = $data['wp_heart_throb'];
    }

    return $response;
}
