<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GYM
 */

get_header();
?>
</div>
</div>

	<?php 
		get_template_part('template-parts/content','slider') ;

		if(get_theme_mod('show_hide_section') == 'mostrar'):
			get_template_part('template-parts/content', 'servicios');
		endif;

		$cantidad = get_theme_mod('cantidad_noticias');
		$args = [
			'posts_per_page'      => $cantidad,
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true,
		];

		$noticias = new WP_Query( $args );

	?>
	<?php 
		$switch = get_theme_mod('show_hide_section_noticias');
		if($switch == 'mostrar'):
	?>
			<div class="container mt-5">
				<div class="row justify-content-center">
					<?php $titulo_noticias = get_theme_mod('titulo_noticias') ?>
					<h2 class="text-center w-100 mb-5"><?php echo $titulo_noticias != "" ? $titulo_noticias : 'Sección Noticias' ?></h2>
					<?php if($noticias->have_posts()):  ?>

						<?php while($noticias->have_posts()) : $noticias->the_post() ?>

							<div class=" col-md-6 col-lg-4 text-center  text-light mb-5">
		 						<?php 
									if(has_post_thumbnail()): 
									 the_post_thumbnail('entrenador_gallery',['class'=> 'w-100',]);
									else: ?>
										<img src="<?php echo get_template_directory_uri() ?>/img/imgDefault.png" class="img-fluid w-100" alt="">
									<?php endif; ?>
								<div class="info-noticias bg-secundario py-5">
									<h3 class="text-center font-weight-bold"><?php the_title() ?></h3>
									<?php echo gym_change_excerpt_size(100,'none') ?>
								</div>

							</div>

						<?php endwhile;wp_reset_postdata(); ?>

					<?php endif; ?>

				</div>
			</div>
			<section class="promocion container mb-5">
				<?php $titulo_promo = get_theme_mod('titulo_promo') ?>
				<h2 class="text-center text-capitalize font-weight-bold"><?php echo $titulo_promo ?></h2>
				<div class="row justify-content-center mt-5">
					<div class="col-md-4">
						<?php 
							$img_promo = get_theme_mod('img_promo'); 
							$ruta_img  = wp_get_attachment_image_src($img_promo,'full');
							if($ruta_img[0]) : ?>
								<img class="img-fluid" src="<?php echo $ruta_img[0] ?>" alt="">
						<?php	else: ?>
							<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/imgDefault.png" alt="">
						<?php endif; ?>
					</div>
					<div class="col-md-5 pl-3">
						<div class="row text-center text-md-left">
								<?php $titulo_col_promo = get_theme_mod('titulo_col_promo') ?>
								<h3 class="mx-auto mt-2 text-md-left"><?php echo $titulo_col_promo ?></h3>
								<p><?php $texto_promo1 = get_theme_mod('texto_promo1'); echo $texto_promo1 ?></p>
							</dv>
						</div>
					</div>

				</div>
			</section>
		<?php endif; ?>
		



<?php 

get_footer();
