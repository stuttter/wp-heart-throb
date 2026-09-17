<?php

use PHPUnit\Framework\TestCase;

final class HeartbeatTest extends TestCase {
	public function test_missing_plugin_data_leaves_the_response_unchanged() {
		$response = array( 'existing' => 'value' );

		$this->assertSame( $response, wp_heart_throb_heartbeat_received( $response, array() ) );
	}

	public function test_beat_data_is_returned_to_the_client() {
		$this->assertSame(
			array( 'wp_heart_throb' => 'beat' ),
			wp_heart_throb_heartbeat_received( array(), array( 'wp_heart_throb' => 'beat' ) )
		);
	}

	public function test_other_plugin_data_is_ignored() {
		$this->assertSame(
			array(),
			wp_heart_throb_heartbeat_received( array(), array( 'another_plugin' => 'beat' ) )
		);
	}

	public function test_non_beat_plugin_data_is_ignored() {
		$this->assertSame(
			array(),
			wp_heart_throb_heartbeat_received( array(), array( 'wp_heart_throb' => 'idle' ) )
		);
	}
}
