<?php

use PHPUnit\Framework\TestCase;

final class AdminBarTest extends TestCase {
	protected function setUp(): void {
		$GLOBALS['wpht_test']['calls']     = array();
		$GLOBALS['wpht_test']['logged_in'] = true;
	}

	public function test_logged_out_visitors_do_not_receive_the_toolbar_item() {
		$GLOBALS['wpht_test']['logged_in'] = false;

		$this->assertFalse( wp_heart_throb_admin_bar_menu_item() );
		$this->assertArrayNotHasKey( 'WPHT_Admin_Bar_Stub::add_menu', $GLOBALS['wpht_test']['calls'] );
	}

	public function test_logged_in_users_receive_the_toolbar_item() {
		wp_heart_throb_admin_bar_menu_item();

		$this->assertSame(
			array(
				'parent' => 'top-secondary',
				'id'     => 'wp-heart-throb',
				'title'  => '<span class="ab-icon"></span>',
				'href'   => '#',
			),
			$GLOBALS['wpht_test']['calls']['WPHT_Admin_Bar_Stub::add_menu'][0][0]
		);
	}
}
