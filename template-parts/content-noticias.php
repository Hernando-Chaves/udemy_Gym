<div class="container mt-5">
	<div class="row">
		<h2 class="text-center w-100 mb-5">Sección Noticias</h2>
		<?php if($noticias->have_posts()):  ?>

			<?php while($noticias->have_posts()) : $noticias->the_post() ?>

				<div class="col-md-4 text-center  text-light mb-5">
					<?php has_post_thumbnail() ? the_post_thumbnail('entrenador_gallery') : '' ?>
					<div class="info-noticias bg-secundario p-5">
						<h3 class="text-center font-weight-bold"><?php the_title() ?></h3>
						<?php echo gym_change_excerpt_size(100,'none') ?>
					</div>
				</div>

			<?php endwhile;wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>
</div>