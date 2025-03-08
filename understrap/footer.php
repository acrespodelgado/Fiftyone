<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper p-0" id="footer">


	<footer id="colophon">
		<div class="site-footer text-center py-4">
			<div class="container">
				<div class="row">
					<div class="col-12 d-inline-flex d-block-mobile">
						<a href="mailto:info@fiftyone.es"><?php _e( 'info@fiftyone.es', 'understrap-master' ); ?></a>
						<span class="black-bar"></span>
						<a href="<?php echo get_site_url();?>/"><img src="<?php echo get_site_url();?>/img/fiftyone-negro.svg" class="img-responsive" alt="<?php _e( 'Logo fiftyone', 'understrap-master' ); ?>"/></a>
						<span class="black-bar"></span>
						<img src="<?php echo get_site_url();?>/img/black-bars.png" class="img-responsive black-bars" alt="<?php _e( 'Barras negras', 'understrap-master' ); ?>"/>
						<img src="<?php echo get_site_url();?>/img/black-bars.png" class="img-responsive ml-4 black-bars" alt="<?php _e( 'Barras negras', 'understrap-master' ); ?>"/>
						<img src="<?php echo get_site_url();?>/img/black-bars.png" class="img-responsive ml-4 black-bars" alt="<?php _e( 'Barras negras', 'understrap-master' ); ?>"/>
					</div>
					<div class="col-12">
						<ul class="d-inline-flex d-block-mobile mt-4 mb-0 p-0">
							<li><a href="<?php echo get_site_url();?>/quienes-somos"><?php _e( '¿Quiénes somos?', 'understrap-master' ); ?></a></li>
							<li><a href="<?php echo get_site_url();?>/metodologia"><?php _e( 'Metodología', 'understrap-master' ); ?></a></li>
							<li><a href="<?php echo get_site_url();?>/servicios"><?php _e( 'Servicios', 'understrap-master' ); ?></a></li>
							<li><a href="<?php echo get_site_url();?>/proyectos-y-clientes"><?php _e( 'Proyectos y clientes', 'understrap-master' ); ?></a></li>
							<li><a href="<?php echo get_site_url();?>/contacto"><?php _e( 'Contacto', 'understrap-master' ); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<p class="m-0"><?php _e( 'Copyright Fiftyone ', 'understrap-master' ); ?><?php echo date("Y"); ?><?php _e( ' - Agencia EnBloque', 'understrap-master' ); ?></p>
					</div>
					<div class="col-12 col-md-6 offset-md-2 text-right">
						<ul class="d-inline-flex d-block-mobile m-0 p-0">
							<li><a href="<?php echo get_site_url();?>/politica-de-privacidad"><?php _e( 'Política de privacidad', 'understrap-master' ); ?></a></li>
							<li class="ml-4"><a href="<?php echo get_site_url();?>/politica-de-cookies"><?php _e( 'Política de Cookies', 'understrap-master' ); ?></a></li>
							<li class="ml-4"><a href="<?php echo get_site_url();?>/terminos-y-condiciones"><?php _e( 'Términos y condiciones', 'understrap-master' ); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

