<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GYM
 */

get_header();
?>

	<div id="primary" class="content-area col-md-10 offset-md-1 mb-5">
		<main id="main" class="site-main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row">
					<div class="col-md-4">
						<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail('foto-entrenador',['class'=> 'rounded img-fluid',]) ?>
						<?php endif; ?>

						<h4 class="text-center">Habilidades</h4>

						 <label><?php the_field('habilidad1') ?></label>
						<div class="progress">
						  <?php $per = get_field('porcentaje_habilidad1') ; ?>
						  <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: <?php echo $per ?>%" aria-valuenow="<?php echo $per ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $per ?></div>
						</div>

						<label><?php the_field('habilidad2') ?></label>
						<div class="progress">
						  <?php $per = get_field('porcentaje_habilidad2') ; ?>
						  <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: <?php echo $per ?>%" aria-valuenow="<?php echo $per ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $per ?></div>
						</div>

						<label><?php the_field('habilidad3') ?></label>
						<div class="progress">
						  <?php $per = get_field('porcentaje_habilidad3') ; ?>
						  <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" style="width: <?php echo $per ?>%" aria-valuenow="<?php echo $per ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $per ?></div>
						</div>
					</div>

					<div class="col-md-8">
						<header class="entry-header mt-4">
							<?php the_title( '<h1 class="entry-title text-capitalize">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<?php the_field('biografia') ?>

						<h3 class="entry-title mt-5">Perfil del entrenador</h3>
						<hr width="40%" align="left">
						<span><b>Nombre: </b></span> <?php the_field('nombre_del_entrnador') ?> <br>

						<!-- CON DATETIME -->
						<?php 
							// $edad = get_field('edad',false,false);
							// $edad = new DateTime($edad);
						?>
						<!-- <span><b>Edad: </b></span> <?php //echo $edad->format('j / m / Y') ?> <br> -->


						<!-- CON NUMERO -->
						<span><b>Edad: </b></span> <?php echo the_field('edad') ?> años<br>
						<span><b>Correo: </b></span><?php the_field('correo')  ?> <br>
						<span><b>Especialidad: </b></span> Boxeo, Spinning, Pilates <br>
						<ul class="nav mt-2 float-left m-0">
							<li class="mr-2">
								<a href="http://facebook.com"><i class="fa fa-facebook-square fa-2x" ></i></a>
							</li>
							<li class="mr-2">
								<a href="http://twitter.com"><i class="fa fa-twitter-square fa-2x" ></i></a>
							</li>
							<li class="mr-2">
								<a href="http://youtube.com"><i class="fa fa-youtube-square fa-2x" ></i></a>
							</li>
						</ul>
					</div>
				</div> <!-- FIN INFO ENTRENADOR -->
				<div class="row mt-4 galeria-trainer">
					<h2 class="col-12 text-center"><?php the_field('titulo_de_las_galerias') ?></h2>
					<?php 
						$image   = get_field('imagen_1');
						$thumb   = $image['sizes']['entrenador_gallery'];
						$caption = $image['caption'];
						if(!empty($image))
						{ ?>
						<div class="col-12 col-md-4 col-gal mt-2 ">
								<img class="img-fluid" src="<?php echo $thumb ?>" alt="" width="<?php echo $thumb ?>">
								<?php if($caption):?>
									<p><?php echo $caption ?></p>
								<?php endif; ?>
						</div>
					<?php } ?>
					<?php 
						$image   = get_field('imagen_2');
						$thumb   = $image['sizes']['entrenador_gallery'];
						$caption = $image['caption'];
						if(!empty($image))
						{ ?>
						<div class="col-12 col-md-4 col-gal mt-2">
								<img class="img-fluid" src="<?php echo $thumb ?>" alt="" width="<?php echo $thumb ?>">
								<?php if($caption):?>
									<p><?php echo $caption ?></p>
								<?php endif; ?>
						</div>
					<?php } ?>
					<?php 
						$image   = get_field('imagen_3');
						$thumb   = $image['sizes']['entrenador_gallery'];
						$caption = $image['caption'];
						if(!empty($image))
						{ ?>
						<div class="col-12 col-md-4 col-gal mt-2">
								<img class="img-fluid" src="<?php echo $thumb ?>" alt="" width="<?php echo $thumb ?>">
								<?php if($caption):?>
									<p><?php echo $caption ?></p>
								<?php endif; ?>
						</div>
					<?php } ?>
				</div>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_footer();
