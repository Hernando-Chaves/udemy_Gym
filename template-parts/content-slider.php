<div id="slider" class="slide carousel " data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<?php 
				$id_img   = get_theme_mod('img1_slider_inicio');
				$txt_1    = get_theme_mod('txt_img_1');
				$ruta_img = wp_get_attachment_image_src($id_img,'full');
				if($ruta_img[0]):
			?>
				<img src="<?php echo $ruta_img[0] ?>" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="h2_slider"><?php echo $txt_1 ?></h2>
				</div>
			<?php else: ?>
				<img src="<?php echo get_template_directory_uri() ?> /img/slider1.jpg" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="h2_slider">Titulo desde el front page</h2>
				</div>
			<?php endif; ?>
		</div>
		<div class="carousel-item ">
			<?php 
				$id_img   = get_theme_mod('img2_slider_inicio');
				$txt_2    = get_theme_mod('txt_img_2');
				$ruta_img = wp_get_attachment_image_src($id_img, 'full');
				if($ruta_img[0]):
			?>
				<img src="<?php echo $ruta_img[0] ?>" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="h2_slider"><?php echo $txt_2 ?></h2>
				</div>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri() ?> /img/slider2.jpg" class="d-block w-100" alt="">
					<div class="carousel-caption d-none d-md-block">
						<h2 class="h2_slider">Titulo desde el front page</h2>
					</div>
				<?php endif; ?>
		</div>
		<div class="carousel-item ">
			<?php 
				$id_img   = get_theme_mod('img3_slider_inicio');
				$txt_3    = get_theme_mod('txt_img_3');
				$ruta_img = wp_get_attachment_image_src($id_img,'full');
				if($ruta_img[0]):
			?>
				<img src="<?php echo $ruta_img[0] ?>" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="h2_slider"><?php echo $txt_3 ?></h2>
				</div>
			<?php else: ?>
				<img src="<?php echo get_template_directory_uri() ?> /img/slider3.jpg" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="h2_slider">Titulo desde el front page</h2>
				</div>
			<?php endif; ?>
			
		</div>
		<div class="carousel-item ">
			<?php 
				$id_img   = get_theme_mod('img4_slider_inicio');
				$txt_4    = get_theme_mod('txt_img_4');
				$ruta_img = wp_get_attachment_image_src($id_img,'full');
				if($ruta_img[0]):
			?>
				<img src="<?php echo $ruta_img[0] ?>" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="h2_slider"><?php echo $txt_4 ?></h2>
				</div>
			<?php else: ?>
				<img src="<?php echo get_template_directory_uri() ?> /img/slider4.jpg" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="h2_slider">Titulo desde el front page</h2>
				</div>
			<?php endif; ?>
			
		</div>
	</div>
	<a href="#slider" class="carousel-control-prev" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a href="#slider" class="carousel-control-next" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
	<ol class="carousel-indicators">
		<li class="active" href="#slider" data-slide-to="0"></li>
		<li href="#slider" data-slide-to="1"></li>
		<li href="#slider" data-slide-to="2"></li>
		<li href="#slider" data-slide-to="3"></li>
	</ol>
</div>