<div class="social-media">
    <div class="container">
        <div class="row">
            <div class="col-12 d-inline-flex py-4">
                <h5><?php _e( 'Síguenos en nuestras redes', 'understrap-master' ); ?></h5>
                <img src="<?php echo get_site_url();?>/img/next.svg" alt="<?php _e( 'Siguiente', 'understrap-master' ); ?>" class="img-responsive"/>
            </div>
            <div class="col-12 post-instagram">
                <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
            </div>
            <div class="col-12 col-md-8 offset-md-2 text-center my-5">
                <h5 class="mb-4"><?php _e( 'Si quieres llevar tu proyecto a otro nivel, haz click aquí.', 'understrap-master' ); ?></h5>
                <a href="<?php echo get_site_url();?>/contacto" class="green-button"><?php _e( 'Contactar', 'understrap-master' ); ?></a>
            </div>
        </div>
    </div>
</div>