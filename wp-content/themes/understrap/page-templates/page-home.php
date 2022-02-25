<?php
/**
 * Template Name: Home Page
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

<div class="wrapper py-0" id="home">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

                    <div class="home-content-1">
                        <?php masterslider(1); ?>
                    </div>

                    <div class="home-content-2 mt-6">
                        <div class="row">
                            <div class="col-12 col-lg-5 mb-4">
                                <h2 class="mt-6 mb-4"><?php _e( '¿Quiénes somos?', 'understrap-master' ); ?></h2>
                                <p class="mb-5"><?php _e( 'Hay muchas maneras de expresarse y Fiftyone te ayuda a encontrar 
                                tu voz y tu mensaje en el registro adecuado. ', 'understrap-master' ); ?></p>
                                <a href="<?php echo get_site_url();?>/quienes-somos" class="green-button"><?php _e( 'Saber más', 'understrap-master' ); ?></a>
                            </div>
                            <div class="col-12 col-lg-7 p-0 mtb-4">
                                <div>
                                    <img src="<?php echo get_site_url();?>/img/home-1.png" alt="<?php _e( 'Fiftyone', 'understrap-master' ); ?>" class="img-responsive"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="home-content-3 mt-8">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <span><?php _e( '· Metodología', 'understrap-master' ); ?></span>
                            </div>
                            <div class="col-12 col-md-7 p-0">
                                <h3><?php _e( 'En Fiftyone hemos desarrollado una metodología perfecta para tu proyecto.', 'understrap-master' ); ?></h3>
                            </div>
                        </div>
                        <div class="row d-inline-flex method py-5 mt-5 mb-0">
                            <div class="col-3 col-md-1">
                                <h5><?php _e( '01/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9 col-md-5">
                                <h4><?php _e( 'Formación', 'understrap-master' ); ?></h4>
                            </div>
                            <div class="col-12 col-md-5">
                                <p><?php _e( 'Nuestra metodología se ha creado a lo largo de años trabajando con clientes con diversas metas, 
                                tras lo que hemos desarrollado varios planes de éxito, todos ellos personalizables y amenos.', 'understrap-master' ); ?></p>
                            </div>
                            <div class="col-12 col-md-1 text-center d-inline-flex d-block-mobile">
                                <a href="<?php echo get_site_url();?>/formacion"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Servicios', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row d-inline-flex method py-5 mb-5 no-border-t">
                            <div class="col-3 col-md-1">
                                <h5><?php _e( '02/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9 col-md-5">
                                <h4><?php _e( 'Traducción e Interpretación', 'understrap-master' ); ?></h4>
                            </div>
                            <div class="col-12 col-md-5">
                                <p><?php _e( 'Le hemos dado una vuelta de tuerca a los típicos procesos de traducción y nos hemos centrado 
                                en la comunicación con el cliente de forma constante para que el resultado sea el esperado.', 'understrap-master' ); ?></p>
                            </div>
                            <div class="col-12 col-md-1 text-center d-inline-flex d-block-mobile">
                                <a href="<?php echo get_site_url();?>/traduccion-e-interpretacion"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Servicios', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="home-content-4 mt-5">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-4">
                                <span><?php _e( '· Nuestros Servicios', 'understrap-master' ); ?></span>
                            </div>
                            <div class="col-12 col-lg-10 green-bg d-inline-flex py-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-6 py-2 pl-8 plt-6 pm-3">
                                            <h6><?php _e( 'Servicios de Formación', 'understrap-master' ); ?></h6>
                                            <div class="black-bg p-2 mb-3">
                                                <p><?php _e( 'Info general de cursos 121Info general de cursos para empresasTipos de cursos:- General- Professional- 
                                                Preparación de exámenes', 'understrap-master' ); ?></p>
                                            </div>
                                            <a href="<?php echo get_site_url();?>/formacion" class="black-button"><?php _e( 'Saber más', 'understrap-master' ); ?></a>
                                        </div>
                                        <div class="col-12 col-md-6 py-2 pr-8 prt-6 pm-3">
                                            <h6><?php _e( 'Servicios de Traducción/Interpretación', 'understrap-master' ); ?></h6>
                                            <div class="black-bg p-2 mb-3">
                                                <p><?php _e( 'Traducción audiovisual', 'understrap-master' ); ?></p>
                                                <p><?php _e( 'Traducción e interpretación deportiva', 'understrap-master' ); ?></p>
                                                <p><?php _e( 'Traducción general', 'understrap-master' ); ?></p>
                                                <p><?php _e( 'Localización web/apps', 'understrap-master' ); ?></p>
                                                <p><?php _e( 'Gestión de proyectos', 'understrap-master' ); ?></p>
                                                <p><?php _e( 'Pack internacionalización', 'understrap-master' ); ?></p>
                                            </div>
                                            <a href="<?php echo get_site_url();?>/traduccion-e-interpretacion" class="black-button"><?php _e( 'Saber más', 'understrap-master' ); ?></a>
                                        </div>
                                    </div>
                                </div>
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
