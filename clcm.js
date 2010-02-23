var CLCM = {

	// These are the various jQuery objects we will use
	box: null,
	quote: null,
	effect: null,
	sayer: null,
	link_box: null,
	body: null,
	play_pause: null,
	banner: null,
	
	// Timer to debounce window resize events
	debounce_resize: null,
	// Timer for fading the controls
	control_fader: null,
	// Flags to get the state of the controls and avoid queuing excess effects
	control_fading_in: false,
	control_faded_in: false,
	// A token that is generated per load of the page. To help avoid re-showing quotes.
	token: "",
	// The timer until the next quote is fetched. Used for play/pause
	quote_timer: null,

	// Initialize all of our jQuery objects and set up events
	init: function () {
		CLCM.token = Math.random();
		CLCM.box = $( "#quote-box" );
		CLCM.quote = $( "#quote" );
		CLCM.effect = $( "#effect-wrapper" );
		CLCM.sayer = $( "#sayer" );
		CLCM.body = $( "body" );
		CLCM.play_pause = $( "#play-pause" );
		CLCM.link_box = $( "#link-box" );
		CLCM.banner = CLCM.quote.children().clone();
		
		CLCM.link_box.hide();
		
		CLCM.play_pause.bind( 'click', CLCM.change_state );
		
		$( window ).bind( 'resize', CLCM.window_resize ).trigger( 'resize' ).bind( 'mousemove', CLCM.window_mousemove );
		CLCM.quote_timer = setTimeout( CLCM.fresh_quote, 2500 );
	},

	// On a window resize event, set up the debouncing
	window_resize: function () {
		if( CLCM.debounce_resize ) { clearTimeout( CLCM.debounce_resize ); }
		CLCM.debounce_resize = setTimeout( CLCM.reposition, 50 );
	},

	// On a window mouse move event, show the controls if needed
	window_mousemove: function () {
		if( CLCM.control_fader ) { clearTimeout( CLCM.control_fader ); }
		CLCM.control_fader = setTimeout( CLCM.fade_controls, 2500 );
		
		if( CLCM.control_fading_in && CLCM.link_box.is( ':animated' ) )
			return;

		if( CLCM.control_faded_in )
			return;

		CLCM.control_fading_in = true;
		CLCM.control_faded_in = false;

		CLCM.link_box.fadeIn( 'fast', function () { CLCM.control_faded_in = true; } );
	},
	
	// Fade the controls back out
	fade_controls: function () {
		CLCM.control_faded_in = false;
		CLCM.control_fading_in = false;
		CLCM.link_box.stop().fadeOut( 'fast' );
	},

	// Reposition the quote box after a debounced resize event
	reposition: function () {
		_height = CLCM.body.height();
		_width = CLCM.body.width();
		CLCM.box.animate(
			{
				left: ( _width - 750 ) / 2 + 'px',
				top: ( _height - 550 ) / 2 + 'px'
			}, 'fast' );
	},

	// Fetch a fresh quote and display it
	fresh_quote: function () {
		$.getJSON(
			'quote.json',
			{
				token: CLCM.token
			},
			function ( data ) {
				CLCM.effect.fadeOut(
					function () {
						CLCM.quote.empty();
						if( true == data.completed ) {
							CLCM.quote.append( CLCM.banner );
							CLCM.sayer.empty();
							CLCM.effect.fadeIn( 'fast' );
							CLCM.play_pause.text( 'restart' );
						}
						else {
						
							if ( true == data.charity ) {
								CLCM.quote.addClass( 'charity' );
							}
							else {
								CLCM.quote.removeClass( 'charity' );
							}
						
							CLCM.quote.append( data.content );
							CLCM.sayer.empty();
							if( null != data.link ) {
								sayer = $('<a href="' + data.link + '" target="_blank">' + data.name + '</a>' );
							}
							else {
								sayer = data.name;
							}
							CLCM.sayer.append( sayer );
							CLCM.effect.fadeIn(
								function () {
									if( false != CLCM.quote_timer ) {
										if( null != data.showfor )
											show_for = data.showfor
										else
											show_for = 7500
										CLCM.quote_timer = setTimeout( CLCM.fresh_quote, show_for );
									}
								}
							);
						}
					}
				);
			}
		);
	},
	
	// Play/Pause/Restart the page
	change_state: function () {
	
		if( 'restart' == CLCM.play_pause.text() ) {
			CLCM.play_pause.text( 'stop' );
			CLCM.token = Math.random();
			CLCM.quote_timer = false;
		}
		
		if( false == CLCM.quote_timer ) {
			CLCM.play_pause.text( 'pause' );
			CLCM.quote_timer = null;
			CLCM.fresh_quote();
		}
		else {
			CLCM.play_pause.text( 'play' );
			if( CLCM.quote_timer ) {
				clearTimeout( CLCM.quote_timer );
				CLCM.quote_timer = false;
			}
		}
	},
}