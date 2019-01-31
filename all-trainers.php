<?php
/**
 * Template Name:Todas las Entrenadores
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

	<div id="primary" class="content-area  mt-5">
		<main id="main" class="site-main">

			<h1 class="text-center mb-4 text-capitalize"><?php the_title() ?></h1>
				
				
			<article id="post-<?php the_ID(); ?>" <?php post_class('row d-flex justify-content-center'); ?>>
				<?php 
					$paged = ( get_query_var('paged') ) ?  get_query_var('paged') : 1;
					$args = [
						'posts_per_page'  => -1,
						'post_type'       => 'entrenador',
						'post_status'     => 'publish',
						'orderby'         => 'rand',
						'paged'           => $paged,
					];

					$trainer = new WP_Query( $args );

					if($trainer->have_posts()):
				?>
						<?php while($trainer->have_posts()):$trainer->the_post() ?>
							<div class="col-sm-6 col-md-4 col-lg-3">
								<div id="entrenadorOverlay">
									<?php has_post_thumbnail() ? the_post_thumbnail('foto-entrenador',['class'=> 'imgTrainer',]) : '' ?>
									<div id="overlay" class=" h-100 w-100 d-flex align-items-center justify-content-center">
										<ul class="nav mt-2 float-left m-0 redes-sociales bt-2 py-2">
											<?php 
												if(get_field('facebook'))
												{ 
													$redes = get_field('facebook'); ?>
													<li class="mr-1">
														<a href="<?php echo $redes  ?>"><i class="fa fa-facebook-square fa-2x" ></i></a>
													</li>
												<?php }
											
												if(get_field('twitter'))
												{ 
													$redes = get_field('twitter'); ?>
													<li class="mr-1">
														<a href="<?php echo $redes  ?>"><i class="fa fa-twitter-square fa-2x" ></i></a>
													</li>
												<?php }
											
												if(get_field('instagram'))
												{ 
													$redes = get_field('instagram'); ?>
													<li class="mr-1">
														<a href="<?php echo $redes  ?>"><i class="fa fa-instagram fa-2x" ></i></a>
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
														<a href="<?php echo $redes  ?>"><i class="fa fa-youtube-square fa-2x" ></i></a>
													</li>
												<?php }
											
												if(get_field('linkedin'))
												{ 
													$redes = get_field('linkedin'); ?>
													<li class="mr-1">
														<a href="<?php echo $redes  ?>"><i class="fa fa-linkedin-square fa-2x" ></i></a>
													</li>
												<?php }
											?>
										</ul>
									</div>
								</div>
								<a  href="<?php the_permalink() ?>" class="btn btn-primary btn-sm btn-block pt-2 ">
									<h3 class="text-center"><?php the_title() ?></h3>
								</a>
								<p class="text-capitalize text-center d-block m-0">especialidades</p>
								<div class="text-left d-column d-md-flex">
									<?php 
										$especialidad = get_the_terms($post->ID,'especialidad');

										if(!empty($especialidad) && !is_wp_error( $especialidad )):
									?>
										<div class="d-flex justify-content-center mb-3">
											<?php foreach($especialidad as $term): ?>
													<span class="badge badge-warning ml-1"> <?php echo $term->name ?>  </span>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif;wp_reset_postdata(); ?>
			</article>
			<div id="paginacion" class="col-12 col-md-6 offset-md-3">
				<?php 
					global $wp_query;
					$total = $trainer->max_num_pages;
					$format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
					$current_page = max(1, get_query_var( 'paged' ));

					if($total > 1)
					{
						$args = [
							'base'      => get_pagenum_link(1) . '%_%',
							'format'    => $format,
							'current'   => $current_page,
							'prev_next' => True,
							'prev_text' => __('&laquo; Anterior'),
							'next_text' => __('Siguiente &raquo;'),
							'total'     => $total,
							'mid_size'  => 4,
							'type'      => 'list'
						];
					}
					echo paginate_links( $args ) ;
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_footer();
