<?php
/**
 * Template Name: Quienes somos Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper pb-0" id="quienes">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

                    <div class="quienes-content-1">
                        <?php masterslider(1); ?>
                    </div>

                    <div class="quienes-content-2 mt-6">
                        <div class="row">
                            <div class="col-12 col-lg-6 p-0">
                                <img src="<?php echo get_site_url();?>/img/quienes-1.png" alt="<?php _e( 'Quienes somos', 'understrap-master' ); ?>" class="img-responsive"/>
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-1">
                                <h2 class="mt-6 mb-3"><?php _e( 'Ofrecemos servicios de Formación, Traducción e Interpretación ajustados a tus necesidades. ', 'understrap-master' ); ?></h2>
                                <p><?php _e( 'Hay muchas maneras de expresarse y Ffityone te ayuda a encontrar tu voz y tu mensaje en el registro adecuado. ', 'understrap-master' ); ?></p>
                            </div>
                            <div class="col-12 my-6 green-bar"></div>
                        </div>
                        
                        <div class="row pb-5">
                            <div class="col-12 col-lg-5">
                                <h2 class="mt-6 mb-3"><?php _e( 'Nuestra misión es presentar una metodología que concentra toda esa experiencia para crear 
                                planes de acción que cubran los requisitos de cada cliente. ', 'understrap-master' ); ?></h2>
                                <p><?php _e( 'Llevamos años ofreciendo servicios de idiomas específicos para empresas tan diversas como clubes de La Liga, hoteles de cinco estrellas, firmas internacionales o plataformas de contenido audiovisual.', 'understrap-master' ); ?></p>
                            </div>
                            <div class="col-12 col-lg-6 offset-lg-1 p-0">
                                <img src="<?php echo get_site_url();?>/img/quienes-2.png" alt="<?php _e( 'Quienes somos', 'understrap-master' ); ?>" class="img-responsive"/> 
                            </div>
                        </div>
                    </div>

                    <?php include 'partners.php'; ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->
    <?php include 'social-media.php'; ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
