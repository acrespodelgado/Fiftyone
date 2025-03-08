<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row d-inline-flex">
		<div class="col-12 col-lg-7">
			<?php the_title( '<h1 class="entry-title mb-4">', '</h1>' ); ?>
		</div>
		<div class="col-12 col-lg-5">
			<?php echo get_the_post_thumbnail( $post->ID, 'large w-100' ); ?>
		</div>
	</div>

	<?php if(get_field('contenido')) : ?>
		<div class="my-5"><?php echo get_field('contenido'); ?></div>
	<?php endif; ?>

	<?php if(get_field('enlace')) : ?>
		<a href="<?php echo get_field('enlace'); ?>"><?php _e( 'Ir al proyecto', 'understrap-master' ); ?></a>
	<?php endif; ?>

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
