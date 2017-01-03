jQuery( document ).ready( function ( $ ) {

	// Hook into heartbeat-send
	$( document ).on( 'heartbeat-send', function( e, data ) {
		data['wp_heart_throb'] = 'beat';
	} );

	// Listen for heartbeat-tick
	$( document ).on( 'heartbeat-tick', function( e, data ) {

		// Bail iy not heart throb
		if ( ! data['wp_heart_throb'] ) {
			return;
		}

		// Get the throbber
		var throbber = $( '#wp-admin-bar-wp-heart-throb .ab-icon' );

		// Toggle the beat
		throbber.toggleClass( 'beat' );

		// Toggle the beat
		setTimeout( function() {
			throbber.toggleClass( 'beat' );
		}, 1000 );
	} );
} );
