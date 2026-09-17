<?php

define( 'ABSPATH', dirname( __DIR__ ) . '/' );

$GLOBALS['wpht_test'] = array(
	'calls'     => array(),
	'logged_in' => true,
);

function wpht_test_call( $name, $arguments = array() ) {
	$GLOBALS['wpht_test']['calls'][ $name ][] = $arguments;

	if ( isset( $GLOBALS['wpht_test']['returns'][ $name ] ) ) {
		return $GLOBALS['wpht_test']['returns'][ $name ];
	}

	return null;
}

function add_action() {
	return wpht_test_call( __FUNCTION__, func_get_args() );
}

function add_filter() {
	return wpht_test_call( __FUNCTION__, func_get_args() );
}

function is_user_logged_in() {
	return $GLOBALS['wpht_test']['logged_in'];
}

function plugin_dir_path( $file ) {
	wpht_test_call( __FUNCTION__, func_get_args() );
	return dirname( $file ) . '/';
}

function plugin_dir_url() {
	wpht_test_call( __FUNCTION__, func_get_args() );
	return 'https://example.test/wp-content/plugins/wp-heart-throb/';
}

function wp_enqueue_script() {
	return wpht_test_call( __FUNCTION__, func_get_args() );
}

function wp_enqueue_style() {
	return wpht_test_call( __FUNCTION__, func_get_args() );
}

final class WPHT_Admin_Bar_Stub {
	public function add_menu( $arguments ) {
		return wpht_test_call( __METHOD__, array( $arguments ) );
	}
}

$GLOBALS['wp_admin_bar'] = new WPHT_Admin_Bar_Stub();

require_once dirname( __DIR__ ) . '/wp-heart-throb.php';

$GLOBALS['wpht_initial_calls'] = $GLOBALS['wpht_test']['calls'];

_wp_heart_throb();

$GLOBALS['wpht_loaded_calls'] = $GLOBALS['wpht_test']['calls'];
