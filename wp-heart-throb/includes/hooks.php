<?php

/**
 * Heart Throb Hooks
 *
 * @package Plugins/HeartThrob/Hooks
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Enqueue admin assets
add_action( 'admin_enqueue_scripts', 'wp_heart_throb_enqueue_assets', -99 );
add_action( 'wp_enqueue_scripts',    'wp_heart_throb_enqueue_assets', -99 );

// Toolbar Item
add_action( 'admin_bar_menu',     'wp_heart_throb_admin_bar_menu_item', 99 );
add_filter( 'heartbeat_received', 'wp_heart_throb_heartbeat_received',  10, 2 );
