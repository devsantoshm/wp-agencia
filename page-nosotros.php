<?php 
/*Template Name: Nosotros*/
?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

			<h1><span><?php the_title(); ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>

				<?php the_content(); ?>
				<!-- <img src="<?php the_field('imagen_1') ?>">
				<img src="<?php the_field('imagen_2') ?>"> -->
	
				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->
			<div class="galeria-nosotros grid1-3">
				<div class="foto">
					<?php  
						$imagen = get_field('imagen_1');//trae id de imagen
						$size = 'mediano';

						if ($imagen) {
							echo wp_get_attachment_image( $imagen, $size, false, array('class' => 'fotografia') );
						}
					?>
				</div>
				<div class="foto">
					<?php
						$imagen = get_field('imagen_2');//trae id de imagen
						$size = 'mediano';

						if ($imagen) {
							echo wp_get_attachment_image( $imagen, $size, false, array('class' => 'fotografia') );
						}
					?>
				</div>
			</div>

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
