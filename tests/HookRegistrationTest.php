<?php

use PHPUnit\Framework\TestCase;

final class HookRegistrationTest extends TestCase {
	public function test_registers_the_plugin_loader() {
		$this->assertContains(
			array( 'plugins_loaded', '_wp_heart_throb' ),
			$GLOBALS['wpht_initial_calls']['add_action']
		);
	}

	public function test_registers_runtime_hooks() {
		$this->assertContains(
			array( 'admin_enqueue_scripts', 'wp_heart_throb_enqueue_assets', -99 ),
			$GLOBALS['wpht_loaded_calls']['add_action']
		);
		$this->assertContains(
			array( 'wp_enqueue_scripts', 'wp_heart_throb_enqueue_assets', -99 ),
			$GLOBALS['wpht_loaded_calls']['add_action']
		);
		$this->assertContains(
			array( 'admin_bar_menu', 'wp_heart_throb_admin_bar_menu_item', 99 ),
			$GLOBALS['wpht_loaded_calls']['add_action']
		);
		$this->assertContains(
			array( 'heartbeat_received', 'wp_heart_throb_heartbeat_received', 10, 2 ),
			$GLOBALS['wpht_loaded_calls']['add_filter']
		);
	}
}
