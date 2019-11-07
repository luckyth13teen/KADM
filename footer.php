<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KADM
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="white site-info tac">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kadm' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'kadm' ), 'WordPress' );
				?>
			</a>
			<span class="sep white"> | </span>
				Designed and built by <a class="white" href="https://www.partisanpixel.com">Partisan Pixel</a>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
