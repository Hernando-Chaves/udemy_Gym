<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GYM
 */

?>
		</div> <!-- FIN ROW -->
	</div><!-- #content container-->

	<footer id="colophon" class="site-footer">

		<div class="container">
			<div class="row">
				
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-1' ) ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-2' ) ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-3' ) ?>
				</div>

			</div>
			<div class="row">
				<div class="site-info text-center col-12">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gym_club' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( '© Derechos Reservados %s', 'gym_club' ), '' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Diseño y Desarrollo: %1$s ', 'gym_club' ),  '<a href="https://bogotawebcompany.com/"> Hernando J. Chaves</a>' );
						?>
				</div><!-- .site-info -->
			</div>
		</div>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
