			(function() {
				var container = document.getElementById( 'frontHeader' ),
					trigger = container.querySelector( 'button.trigger' );

				function toggleContent() {
					if( classie.has( container, 'container--open' ) ) {
						classie.remove( container, 'container--open' );
						classie.remove( trigger, 'trigger--active' );
						window.addEventListener( 'scroll', noscroll );
					}
					else {
						classie.add( container, 'container--open' );
						classie.add( trigger, 'trigger--active' );
						window.removeEventListener( 'scroll', noscroll );
					}
				}

				function noscroll() {
					window.scrollTo( 0, 0 );
				}

				// reset scrolling position
				document.body.scrollTop = document.documentElement.scrollTop = 0;

				// disable scrolling
				window.addEventListener( 'scroll', noscroll );

				trigger.addEventListener( 'click', toggleContent );

				// For Demo purposes only (prevent jump on click)
				[].slice.call( document.querySelectorAll('.items-wrap a') ).forEach( function(el) { el.onclick = function() { return false; } } );
			})();