<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ameno
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
        <?php get_sidebar( 'footer' ); ?>
        
        <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ameno' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ameno' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php
			printf(
				/* translators: %1$s = text link: Simone, URL: http://wordpress.org/themes/simone/, %2$s = text link: mor10.com, URL: http://mor10.com/ */
				__( 'Theme: %1$s by %2$s', 'ameno' ),
                                '<a href="http://wordpress.org/themes/ameno/" rel="nofollow">' . esc_attr( 'Ameno', 'ameno' ) . '</a>',
				'<a href="http://infasta.com/" rel="designer nofollow">' . esc_attr__( 'infasta.com', 'ameno' ) . '</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="<?php echo get_template_directory_uri(); ?>/slidingheader/js/classie.js"></script>
		<script>
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
		</script>
<?php wp_footer(); ?>

</body>
</html>
