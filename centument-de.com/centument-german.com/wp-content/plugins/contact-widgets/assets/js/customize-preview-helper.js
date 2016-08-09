( function ( $ ) {

	$( document ).on( 'click', '.wpcw-widgets', function() {

		wp.customize.WidgetCustomizerPreview.preview.send( 'focus-widget-control', $( this ).prop( 'id' ) );

	});

} )( jQuery );
