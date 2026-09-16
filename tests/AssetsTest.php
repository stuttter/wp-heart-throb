<?php

use PHPUnit\Framework\TestCase;

final class AssetsTest extends TestCase {
	protected function setUp(): void {
		$GLOBALS['wpht_test']['calls'] = array();
	}

	public function test_enqueues_heartbeat_and_plugin_assets() {
		wp_heart_throb_enqueue_assets();

		$this->assertSame(
			array( 'heartbeat' ),
			$GLOBALS['wpht_test']['calls']['wp_enqueue_script'][0]
		);
		$this->assertSame(
			array(
				'wp-heart-throb',
				'https://example.test/wp-content/plugins/wp-heart-throb/wp-heart-throb/assets/css/wp-heart-throb.css',
				array(),
				201701030001,
			),
			$GLOBALS['wpht_test']['calls']['wp_enqueue_style'][0]
		);
		$this->assertSame(
			array(
				'wp-heart-throb',
				'https://example.test/wp-content/plugins/wp-heart-throb/wp-heart-throb/assets/js/wp-heart-throb.js',
				array(),
				201701030001,
				true,
			),
			$GLOBALS['wpht_test']['calls']['wp_enqueue_script'][1]
		);
	}
}
