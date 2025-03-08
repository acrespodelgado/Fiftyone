<?php
/**
 * Template Name: Proyectos Page
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

<div class="wrapper py-0" id="projects">

    <main class="site-main" id="main" role="main">

        <div class="<?php echo esc_attr( $container ); ?>" id="content">

            <div class="row">

                <div class="col-md-12 content-area" id="primary">

                    <div class="project-content-1 mt-6">
                        <input type="text" placeholder="/Nombre, categoria..." class="input-search w-100" id="search"/>
                    </div>

                    <div class="project-content-2 py-5 row">
                    <?php 

                        $args = array(
                            'post_type' => 'proyecto',
                            'posts_per_page' => 12,
                            'paged' => $paged,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $query = new WP_Query( $args );
                        if($query->have_posts()) : 
                            $i = 1;
                            while($query->have_posts()) : 
                                $query->the_post(); ?>
                                <div class="col-12 col-md-6 col-xl-4">
                                    <div class="project text-center p-5 my-3 <?php echo $i % 3 == 1 ? 'mr-3' : '' ; ?> <?php echo $i % 3 == 0 ? 'no-ml-md ml-3' : '' ; ?>">
                                        <h2 class="mb-4"><?php echo wp_trim_words(get_the_title(), 5); ?></h2>
                                        <?php if(get_field('descripcion')) : ?>
                                            <p class="text-left mb-5"><?php echo wp_trim_words(get_field('descripcion'), 10); ?></p>
                                        <?php endif; ?>
                                        <?php if(get_field('enlace')) : ?>
                                            <a href="<?php echo get_post_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="black-button-2 text-center">
                                                <?php _e( 'Ver más', 'understrap-master' ); ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            
                            <?php 
                                $i++;
                                endwhile; ?>
                        <?php 
                        wp_reset_postdata();
                        endif; ?>
                        
                        <?php
                        understrap_pagination( [
                            'current' => $paged,
                            'total'   => $query->max_num_pages,
                        ] );
                        ?>
                    </div>

                </div><!-- #primary -->

            </div><!-- .row end -->

        </div><!-- #content -->

    </main><!-- #main -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
