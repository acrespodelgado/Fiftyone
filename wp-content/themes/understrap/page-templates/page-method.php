<?php
/**
 * Template Name: Metodología Page
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

<div class="wrapper pb-0" id="method">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

                    <div class="method-content-1">
                        <?php masterslider(1); ?>
                    </div>

                    <div class="method-content-2">
                        <div class="container mb-5">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <h2><?php _e( '· Formación', 'understrap-master' ); ?></h2>
                                    <p><?php _e( 'Nuestra metodología se ha creado a lo largo de años trabajando con clientes con diversas metas, 
                                    tras lo que hemos desarrollado tres planes de éxito: General, Professional y Exams, todos ellos personalizables 
                                    y amenos.', 'understrap-master' ); ?></p>
                                    <p><?php _e( 'Si tu meta es viajar, tu curso abordará estos temas. Si quieres mejorar tus funciones laborales en 
                                    un nuevo idioma, tu curso incluirá vocabulario y funciones laborales que reflejen estos objetivo.', 'understrap-master' ); ?></p>
                                    <p><?php _e( 'Sin alumno, no hay formación. Todos nuestros planes incluyen una o varias consultas previas para establecer 
                                    las metas y un plan de seguimiento para asegurar que estas se alcancen.', 'understrap-master' ); ?></p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <img src="<?php echo get_site_url();?>/img/method-1.png" alt="<?php _e( 'Formación', 'understrap-master' ); ?>" class="img-responsive" />
                                    <!--<img src="<?php echo get_site_url();?>/img/method-finish.png" alt="<?php _e( 'Complemento imagen', 'understrap-master' ); ?>" class="img-responsive" />-->
                                </div>
                            </div>
                        </div>
                        <div class="container mb-6">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <h2><?php _e( '· Servicios de Traducción e Interpretación', 'understrap-master' ); ?></h2>
                                    <p><?php _e( 'En Fiftyone hemos desarrollado una metodología perfecta para tu producto. 
                                    Le hemos dado una vuelta de tuerca a los típicos procesos de traducción y nos hemos centrado 
                                    en la comunicación con el cliente de forma constante para que el resultado sea el esperado.', 'understrap-master' ); ?></p>
                                    <p><?php _e( 'Videollamadas antes, durante y después del primer contacto con el producto que aseguran que el resultado sea perfecto. 
                                    Tratamos a tu proyecto como si fuera una joya, la moldeamos según el contexto y el registro que necesite y te la devolvemos más que 
                                    reluciente para que cumpla su objetivo.', 'understrap-master' ); ?></p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <img src="<?php echo get_site_url();?>/img/method-2.png" alt="<?php _e( 'Traducción e interpretación', 'understrap-master' ); ?>" class="img-responsive" />
                                    <!--<img src="<?php echo get_site_url();?>/img/method-finish.png" alt="<?php _e( 'Complemento imagen', 'understrap-master' ); ?>" class="img-responsive" />-->
                                </div>
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
