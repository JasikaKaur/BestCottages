<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	</div><!-- #main -->
	<footer id="colophon" role="contentinfo">
			<?php
				/*
				 * A sidebar in the footer? Yep. You can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>"><?php printf( _( 'Website created by %s', 'twentyeleven' ), 'jasikakaur@live.com   +91-9888816474 ' ); ?></a>
			<a href="http://localhost/jasika/" title="Home" rel="generator">Home   </a>
			<a href="http://localhost/jasika/index.php/accomodation/"title="Accomodation" rel="generator">Accomodation </a>
			<a href="http://localhost/jasika/index.php/facilities/"title="Facilities" rel="generator">Facilities </a>
			<a href="http://localhost/jasika/index.php/Best-Cottages-tour/"title="Best Cottages Tour" rel="generator">Best Cottages Tour </a>
			<a href="http://localhost/jasika/index.php/packages/"title="Packages" rel="generator">Packages </a>
			<a href="http://localhost/jasika/index.php/places-of-interest/"title="Places of Interest" rel="generator">Places Of Interest </a>
			<a href="http://localhost/jasika/index.php/studio-apartment/"title="Studio-Apartment" rel="generator">Studio Apartment </a>
			<a href="http://localhost/jasika/index.php/contact-us/"title="Contact-Us" rel="generator">Contact Us </a>
			<a href="http://localhost/jasika/index.php/book-now/"title="Book-Now" rel="generator">Book Now </a>

	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
