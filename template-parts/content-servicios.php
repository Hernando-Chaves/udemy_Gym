<section class="bg-secundario row mb-2 py-5 px-5 servicios justify-content-center">
	<div class="col-md-4 col-sm-6 text-center text-light mt-5 mt-md-0">
	<?php 
		$icono  = get_theme_mod('icono_col_1');
	?>
		<i class="<?php echo $icono ? $icono : 'fa fa-user' ?>" ></i>
		<?php $titulo = get_theme_mod('texto_col_1'); ?>
		<h3 class="mt-3"><?php echo $titulo ? $titulo : ''; ?></h3>
		<?php $contenido = get_theme_mod('contenido_col_1'); ?>
		<p><?php echo $contenido ? $contenido : 'Contenido de Columna'; ?></p>
		<?php 
			$txt_btn = get_theme_mod('boton_col_1');
			$enlace  = get_theme_mod('href_boton_col_1');
			if($txt_btn && $enlace):
		?>
			<a href="<?php echo $enlace ?>" target="_blank" class="btn btn-inverso btn-sm btn-block "><?php echo $txt_btn ?></a>
			<?php else: ?>
			<a href="#" target="_blank" class="btn btn-inverso btn-sm btn-block ">Botón 1</a>
		<?php endif; ?>
		
	</div>

	<div class="col-md-4 col-sm-6 text-center text-light mt-5 mt-md-0">
		<?php 
			$icono  = get_theme_mod('icono_col_2')
		?>
		<i class="<?php echo $icono ? $icono : 'fa fa-user' ?>"></i>
		<?php $titulo = get_theme_mod('texto_col_2'); ?>
		<h3 class="mt-3"><?php echo $titulo ? $titulo : ''; ?></h3>
		<?php $contenido = get_theme_mod('contenido_col_2'); ?>
		<p><?php echo $contenido ? $contenido : 'Contenido de Columna'; ?></p>
		<?php 
			$txt_btn = get_theme_mod('boton_col_2');
			$enlace  = get_theme_mod('href_boton_col_2');
			if($txt_btn && $enlace):
		?>
			<a href="<?php echo $enlace ?>" target="_blank" class="btn btn-inverso btn-sm btn-block "><?php echo $txt_btn ?></a>
			<?php else: ?>
			<a href="#" target="_blank" class="btn btn-inverso btn-sm btn-block ">Botón 2</a>
		<?php endif; ?>
	</div>

	<div class="col-md-4 col-sm-6 text-center text-light mt-5 mt-md-0">
		<?php 
			$icono  = get_theme_mod('icono_col_3')
		?>
		<i class="<?php echo $icono ? $icono : 'fa fa-user' ?>""></i>
		<?php $titulo = get_theme_mod('texto_col_3'); ?>
		<h3 class="mt-3"><?php echo $titulo ? $titulo : ''; ?></h3>
		<?php $contenido = get_theme_mod('contenido_col_3'); ?>
		<p><?php echo $contenido ? $contenido : 'Contenido de Columna'; ?></p>
		<?php 
			$txt_btn = get_theme_mod('boton_col_3');
			$enlace  = get_theme_mod('href_boton_col_3');
			if($txt_btn && $enlace):
		?>
			<a href="<?php echo $enlace ?>" target="_blank" class="btn btn-inverso btn-sm btn-block "><?php echo $txt_btn ?></a>
			<?php else: ?>
			<a href="#" target="_blank" class="btn btn-inverso btn-sm btn-block ">Botón 3</a>
		<?php endif; ?>

	</div>
</section>