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
			<div class="container">
				<div id="clase1" class="slide carousel" data-ride="carousel">
					<div class="carousel-inner">
						
						<div class="carousel-item active ">
							<?php 
								$image = get_field('slide_1');
								$size  = $image['sizes']['slide-clases'];
								if(!empty($image))
								{ ?>
									<img src="<?php echo $size ?>" alt="" class="img-fluid d-block">
								<?php }
							?>
						</div>
						<div class="carousel-item">
							<?php 
								$image = get_field('slide_2');
								$size  = $image['sizes']['slide-clases'];
								if(!empty($image))
								{ ?>
									<img src="<?php echo $size ?>" alt="" class="img-fluid d-block">
								<?php }
							?>
						</div>
						<div class="carousel-item">
							<?php 
								$image = get_field('slide_3');
								$size  = $image['sizes']['slide-clases'];
								if(!empty($image))
								{ ?>
									<img src="<?php echo $size ?>" alt="" class="img-fluid d-block">
								<?php }
							?>
						</div>
						<div class="carousel-item">
							<?php 
								$image = get_field('slide_4');
								$size  = $image['sizes']['slide-clases'];
								if(!empty($image))
								{ ?>
									<img src="<?php echo $size ?>" alt="" class="img-fluid d-block">
								<?php }
							?>
						</div>
					</div>
					<a href="#clase1" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
					<a href="#clase1" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
					<ol class="carousel-indicators">
						<li class="active" data-slide-to="0" data-target="#clase1"></li>
						<li data-slide-to="1" data-target="#clase1"></li>
						<li data-slide-to="2" data-target="#clase1"></li>
						<li data-slide-to="3" data-target="#clase1"></li>
					</ol>
				</div><!-- SLIDER -->
				<div class="row">
					<div class="col-12">
						<h1 class="entry-title text-center text-md-left"><?php the_title() ?></h1>
					</div>					
					<p class="col-12"><?php the_field('descripcion') ?></p>
				</div>
				<div class="row hora-clases">
					<?php 
						if(get_field('horario_1'))
						{ ?>
							<div class="col caja-clases pt-3">
								<?php 
									the_field('horario_1');

									if(get_field('precio_1'))
									{ ?>
										<p><b><?php the_field('precio_1') ?></b></p>
									<?php }
								?>
							</div>
						<?php }
					
						if(get_field('horario_2'))
						{ ?>
							<div class="col caja-clases pt-3">
								<?php 
									the_field('horario_2');

									if(get_field('precio_2'))
									{ ?>
										<p><b><?php the_field('precio_2') ?></b></p>
									<?php }
								?>
							</div>
						<?php }
					
						if(get_field('horario_3'))
						{ ?>
							<div class="col caja-clases pt-3">
								<?php 
									the_field('horario_3');

									if(get_field('precio_3'))
									{ ?>
										<p><b><?php the_field('precio_3') ?></b></p>
									<?php }
								?>
							</div>
						<?php }
					?>
				</div><!-- .hora-clases -->
				<div class="row mt-5 justify-content-center">
					<?php 
						$post_object = get_field('entrenador_encargado');
						if($post_object)
						{
							$post = $post_object;
							setup_postdata( $post );
						
					?>
					<div class="col-4">
						<?php the_post_thumbnail('foto-entrenador') ?>
					</div>
					<div class="col-12 col-md-6 pt-5 a_clase-entrenador">
						<a href="<?php the_permalink() ?>">
							<h2 class="text-center text-md-left"><?php the_field('nombre_del_entrnador') ?></h2>
						</a>
						<p><?php the_field('biografia'); ?></p>
						<a href="<?php the_permalink() ?>" class="btn btn-primary">Ver instructor</a>
						<ul class="nav justify-content-center col-8 offset-md-2">
							<?php 
								if(get_field('facebook'))
								{ 
									$redes = get_field('facebook'); ?>
									<li class="mr-1">
										<a href="<?php $redes  ?>"><i class="fa fa-facebook-square fa-2x" ></i></a>
									</li>
								<?php }
							
								if(get_field('twitter'))
								{ 
									$redes = get_field('twitter'); ?>
									<li class="mr-1">
										<a href="<?php $redes  ?>"><i class="fa fa-twitter-square fa-2x" ></i></a>
									</li>
								<?php }
							
								if(get_field('instagram'))
								{ 
									$redes = get_field('instagram'); ?>
									<li class="mr-1">
										<a href="<?php $redes  ?>"><i class="fa fa-instagram fa-2x" ></i></a>
									</li>
								<?php }
							
								if(get_field('google'))
								{ 
									$redes = get_field('google'); ?>
									<li class="mr-1">
										<a href="<?php echo $redes  ?>"><i class="fa fa-google-plus-square fa-2x" ></i></a>
									</li>
								<?php }
							
								if(get_field('youtube'))
								{ 
									$redes = get_field('youtube'); ?>
									<li class="mr-1">
										<a href="<?php $redes  ?>"><i class="fa fa-youtube-square fa-2x" ></i></a>
									</li>
								<?php }
							
								if(get_field('linkedin'))
								{ 
									$redes = get_field('linkedin'); ?>
									<li class="mr-1">
										<a href="<?php $redes  ?>"><i class="fa fa-linkedin-square fa-2x" ></i></a>
									</li>
								<?php }

								wp_reset_postdata();
							  }
							?>
						</ul>
					</div>
				</div>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_footer();
