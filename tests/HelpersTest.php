<?php

use PHPUnit\Framework\TestCase;

final class HelpersTest extends TestCase {
	protected function setUp(): void {
		$GLOBALS['wpht_test']['calls'] = array();
	}

	public function test_returns_the_plugin_directory_url() {
		$this->assertSame(
			'https://example.test/wp-content/plugins/wp-heart-throb/wp-heart-throb/',
			wp_heart_throb_get_plugin_url()
		);
		$this->assertSame(
			array( dirname( __DIR__ ) . '/wp-heart-throb.php' ),
			$GLOBALS['wpht_test']['calls']['plugin_dir_url'][0]
		);
	}

	public function test_returns_the_current_asset_version() {
		$this->assertSame( 201701030001, wp_heart_throb_get_asset_version() );
	}
}
