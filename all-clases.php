<?php
/**
 * Template Name:Todas las Clases
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

	<div id="primary" class="content-area col-sm-6 col-md-12">
		<main id="main" class="site-main">

			<h1 class="text-center mb-4"><?php the_title() ?></h1>
				
				<div class="row ">
					<div class="col d-flex justify-content-center flex-column flex-md-row menu-tipo-clase">
						<?php 
							$terms = get_terms('tipo_clase');
							// var_dump($terms);
							if(!empty($terms) && !is_wp_error($terms)):
						?>
						<!-- <div class="menu-tipo-clase btn-group btn-group-toggle" data-toggle="buttons"> -->
							<a href="#" class="btn btn-primary todos">Todos</a>
							<?php foreach($terms as $term): ?>
								<a href="#<?php echo $term->slug ?>"  for="" class="btn btn-primary ">
									<?php echo $term->name ?>
								</a>
							<?php endforeach; ?>
						<!-- </div> -->
						<?php endif; ?>
					</div>
				</div>
			<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
					<?php 
						foreach($terms as $term)
						{
							filtrar_clases($term->slug);
						}
					?>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_footer();
