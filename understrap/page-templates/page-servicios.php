<?php
/**
 * Template Name: Servicios Page
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

<div class="wrapper pb-0" id="services">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

                    <div class="service-content-1">
                        <?php masterslider(1); ?>
                    </div>

                    <div class="service-content-2">  
                        <div class="row service py-5 mt-5 mb-0">
                            <div class="col-3 col-md-2">
                                <h2><?php _e( '01/', 'understrap-master' ); ?></h2>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Información general de los cursos 121', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Información general de los cursos para empresas: ', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-2">
                                <h2><?php _e( '02/', 'understrap-master' ); ?></h2>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Servicios para empresas', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Información general de los cursos para empresas: ', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-2">
                                <h2><?php _e( '03/', 'understrap-master' ); ?></h2>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Tipos de cursos: ', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Información general de los cursos para empresas: ', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-1 offset-md-1">
                                <h5><?php _e( '03.1/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Cursos de idiomas generales', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Información general de los cursos para empresas: ', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-1 offset-md-1">
                                <h5><?php _e( '03.2/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Cursos para profesionales', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Información general de los cursos para empresas: ', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-1 offset-md-1">
                                <h5><?php _e( '03.3/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Cursos para profesionales', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Cursos de preparación de exámenes', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-2">
                                <h2><?php _e( '04/', 'understrap-master' ); ?></h2>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Servicios de Traducción ', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Información general de los cursos para empresas: ', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-1 offset-md-1">
                                <h5><?php _e( '04.1/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Traducción audiovisual', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Cursos de preparación de exámenes', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-1 offset-md-1">
                                <h5><?php _e( '04.2/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Traducción e Interpretación deportiva', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Cursos de preparación de exámenes', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-1 offset-md-1">
                                <h5><?php _e( '04.3/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Traducción general', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Cursos de preparación de exámenes', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-1 offset-md-1">
                                <h5><?php _e( '04.4/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Localización web/apps', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Cursos de preparación de exámenes', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-1 offset-md-1">
                                <h5><?php _e( '04.5/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Gestión de proyectos', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Cursos de preparación de exámenes', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                        <div class="row service py-5 mb-0 no-border-t">
                            <div class="col-3 col-md-1 offset-md-1">
                                <h5><?php _e( '04.6/', 'understrap-master' ); ?></h5>
                            </div>
                            <div class="col-9">
                                <h3><?php _e( 'Cursos para profesionales', 'understrap-master' ); ?></h3>
                                <div class="hide" id="hide-1">
                                    <h4><?php _e( 'Pack internalización', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Necesites lo que necesites, nuestros cursos se adaptarán a tus objetivos y 
                                    crearán un ambiente en el  que tus empleados disfruten, al mismo tiempo que alcanzarán metas específicas y tangibles determinadas de antemano.', 'understrap-master' ); ?></p>
                                    <h4><?php _e( 'El plan formativo para tu empresa:', 'understrap-master' ); ?></h4>
                                    <p><?php _e( 'Todos nuestros cursos se pueden cubrir con créditos de Fundae.', 'understrap-master' ); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-1 text-center">
                                <a href="<?php echo get_site_url();?>/#"><i class="fa fa-plus" aria-hidden="true"></i><br><span><?php _e( 'Ver más', 'understrap-master' ); ?></span></a>
                            </div>
                        </div>
                    </div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->
    <?php include 'social-media.php'; ?>

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
