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

<?php wp_footer(); ?>

</body>
</html>
