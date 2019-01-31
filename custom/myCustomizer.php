<?php 

/**
 * Agrega opciones personaizadas al customizer 
 */
if(!function_exists('gym_customizer'))
{
	function gym_customizer($wp_customize)
	{
		$iconos = [
				'fa fa-user'                 => __('Usuario','gym_club'),
				'fa fa-address-book'         => __('Usuario 2','gym_club'),
				'fa fa-wheelchair-alt'       => __('Silla de ruedas','gym_club'),
				'fa fa-envelope-open-o'      => __('Correo','gym_club'),
				'fa fa-question-circle-o'    => __('FAQ','gym_club'),
				'fa fa-volume-control-phone' => __('teléfono','gym_club'),
		];
		/**
		 * Imagen 1 para el slider 
		 */
		$wp_customize->add_panel('opciones_gym',[
			'title'       => __('Opciones Gym del Inicio','gym_club'),
			'description' => 'Opciones de confifuración, para la pagina principal',
			'priority'    => 10,
		]);
		$wp_customize->add_section('slider_inicio',[
			'title'       => 'Imágenes para el slider del inicio',
			'panel'       => 'opciones_gym',
		]);
		$wp_customize->add_setting( 'img1_slider_inicio', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img1_slider_inicio', [
			'label'     => __( 'Imágen 1 para slider', 'gym_club' ),
			'section'   => 'slider_inicio',
			'mime_type' => 'image',
			'priority'=> 1,
		] ) );
		/*PARA EL TEXTO IMAGEN 1*/
		$wp_customize->add_setting( 'txt_img_1', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);

		$wp_customize->add_control( 'txt_img_1', [
			'label'   => __( 'Titulo imágen 1','gym_club' ),
			'type'    => 'textarea',
			'section' => 'slider_inicio',
			'priority'=> 2,
		] );
		/**
		 * Imagen 2 para el slider 
		 */
		$wp_customize->add_setting( 'img2_slider_inicio', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img2_slider_inicio', [
			'label'     => __( 'Imágen 2 para slider', 'gym_club' ),
			'section'   => 'slider_inicio',
			'mime_type' => 'image',
			'priority'  => 3,
		] ) );
		/*PARA EL TEXTO IMAGEN 2*/
		$wp_customize->add_setting( 'txt_img_2', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);

		$wp_customize->add_control( 'txt_img_2', [
			'label'   => __( 'Titulo imágen 2','gym_club' ),
			'type'    => 'textarea',
			'section' => 'slider_inicio',
			'priority'=> 4,
		] );
		/**
		 * Imagen 3 para el slider 
		 */
		$wp_customize->add_setting( 'img3_slider_inicio', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img3_slider_inicio', [
			'label'     => __( 'Imágen 3 para slider', 'gym_club' ),
			'section'   => 'slider_inicio',
			'mime_type' => 'image',
			'priority'  => 5,
		] ) );
		/*PARA EL TEXTO IMAGEN 3*/
		$wp_customize->add_setting( 'txt_img_3', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);

		$wp_customize->add_control( 'txt_img_3', [
			'label'   => __( 'Titulo imágen 3','gym_club' ),
			'type'    => 'textarea',
			'section' => 'slider_inicio',
			'priority'=> 6,
		] );
		/**
		 * Imagen 4 para el slider 
		 */
		$wp_customize->add_setting( 'img4_slider_inicio', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img4_slider_inicio', [
			'label'     => __( 'Imágen 4 para slider', 'gym_club' ),
			'section'   => 'slider_inicio',
			'mime_type' => 'image',
			'priority'  => 7,
		] ) );
		/*PARA EL TEXTO IMAGEN 4*/
		$wp_customize->add_setting( 'txt_img_4', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);

		$wp_customize->add_control( 'txt_img_4', [
			'label'   => __( 'Titulo imágen 4','gym_club' ),
			'type'    => 'textarea',
			'section' => 'slider_inicio',
			'priority'=> 8,
		] );

		/**
		 * Seccion para editar los iconos de servicio 
		 */
		$wp_customize->add_section('iconos_servicios_home',[
			'title'       => 'Iconos de servicios del inicio',
			'panel'       => 'opciones_gym',
		]);
		/**
		 *  icono 1 
		 */
		$wp_customize->add_setting( 'icono_col_1', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'fa fa-user',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);

		$wp_customize->add_setting( 'show_hide_section', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'mostrar',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('show_hide_section',[
			'label'       => __('Botón para servicio 3'),
			'type'        => 'radio',
			'section'     => 'iconos_servicios_home',
			'description' => '',
			'priority'    => 1,
			'choices'=> [
				'mostrar'=> __('Mostrar la sección','gym_club'),
				'ocultar'=> __('Ocultar la sección','gym_club'),
			]
		]);
		  
		$wp_customize->add_control('icono_col_1',[
			'label'       => __('Icono para servicio 1'),
			'type'        => 'select',
			'section'     => 'iconos_servicios_home',
			'description' => 'El icono se mostrará en la columna número 1',
			'priority'    => 2,
			'choices'=> $iconos
		]);

		$wp_customize->add_setting( 'texto_col_1', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('texto_col_1',[
			'label'       => __('Titulo para servicio 1'),
			'type'        => 'text',
			'section'     => 'iconos_servicios_home',
			'description' => 'El titulo para la columna número 1',
			'priority'    => 3
		]);
		$wp_customize->add_setting( 'contenido_col_1', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'Contenido para la columna 1',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('contenido_col_1',[
			'label'       => __('Texto para servicio 1'),
			'type'        => 'textarea',
			'section'     => 'iconos_servicios_home',
			'description' => 'Contenido para la columna número 1',
			'priority'    => 4
		]);
		$wp_customize->add_setting( 'boton_col_1', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'Botón para la columna 1',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('boton_col_1',[
			'label'       => __('Botón para servicio 1'),
			'type'        => 'text',
			'section'     => 'iconos_servicios_home',
			'description' => 'Botón para la columna número 1',
			'priority'    => 5
		]);
		$wp_customize->add_setting( 'href_boton_col_1', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'https://',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('href_boton_col_1',[
			'label'       => __('Enlace para servicio 1'),
			'type'        => 'text',
			'section'     => 'iconos_servicios_home',
			'description' => 'Enlace para el botón número 1',
			'priority'    => 6
		]);
		/**
		 * icono 2 
		 */
		$wp_customize->add_setting( 'icono_col_2', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'Botón 1',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('icono_col_2',[
			'label'       => __('Icono para servicio 2'),
			'type'        => 'select',
			'section'     => 'iconos_servicios_home',
			'description' => 'El icono se mostrará en la columna número 2',
			'priority'    => 7,
			'choices'     => $iconos
		]);


		$wp_customize->add_setting( 'texto_col_2', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'Contenido para la columna 2',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('texto_col_2',[
			'label'       => __('Titulo para servicio 2'),
			'type'        => 'text',
			'section'     => 'iconos_servicios_home',
			'description' => 'El titulo para la columna número 2',
			'priority'    => 8
		]);
		$wp_customize->add_setting( 'contenido_col_2', [
			'type'                                                                                          => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'Contenido para la columna 2',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('contenido_col_2',[
			'label'       => __('Texto para servicio 2'),
			'type'        => 'textarea',
			'section'     => 'iconos_servicios_home',
			'description' => 'Contenido para la columna número 2',
			'priority'    => 9
		]);

		$wp_customize->add_setting( 'boton_col_2', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'Botón para la columna 2',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('boton_col_2',[
			'label'       => __('Botón para servicio 2'),
			'type'        => 'text',
			'section'     => 'iconos_servicios_home',
			'description' => 'Botón para la columna número 2',
			'priority'    => 10
		]);
		$wp_customize->add_setting( 'href_boton_col_2', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'https://',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('href_boton_col_2',[
			'label'       => __('Enlace para servicio 2'),
			'type'        => 'text',
			'section'     => 'iconos_servicios_home',
			'description' => 'Enlace para el botón número 2',
			'priority'    => 11
		]);
		/**
		 * icono 3 
		 */
		$wp_customize->add_setting( 'icono_col_3', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'fa fa-user',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('icono_col_3',[
			'label'       => __('Icono para servicio 3'),
			'type'        => 'select',
			'section'     => 'iconos_servicios_home',
			'description' => 'El icono se mostrará en la columna número 3',
			'priority'    => 12,
			'choices'     => $iconos
		]);
		$wp_customize->add_setting( 'texto_col_3', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('texto_col_3',[
			'label'       => __('Titulo para servicio 3'),
			'type'        => 'text',
			'section'     => 'iconos_servicios_home',
			'description' => 'El titulo para la columna número 3',
			'priority'    => 13
		]);
		$wp_customize->add_setting( 'contenido_col_3', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('contenido_col_3',[
			'label'       => __('Texto para servicio 3'),
			'type'        => 'textarea',
			'section'     => 'iconos_servicios_home',
			'description' => 'Contenido para la columna número 3',
			'priority'    => 14
		]);
		
		$wp_customize->add_setting( 'boton_col_3', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'Botón para la columna 3',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('boton_col_3',[
			'label'       => __('Botón para servicio 3'),
			'type'        => 'text',
			'section'     => 'iconos_servicios_home',
			'description' => 'Botón para la columna número 3',
			'priority'    => 15
		]);
		$wp_customize->add_setting( 'href_boton_col_3', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'https://',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('href_boton_col_3',[
			'label'       => __('Enlace para servicio 3'),
			'type'        => 'text',
			'section'     => 'iconos_servicios_home',
			'description' => 'Enlace para el botón número 3',
			'priority'    => 16
		]);  
		/**
		 * SECCIÓN NnOTICIAS 
		 */
		$wp_customize->add_section('noticias_home',[
			'title'       => 'Muestra artículos del blog',
			'panel'       => 'opciones_gym',
		]);

		$wp_customize->add_setting( 'show_hide_section_noticias', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'mostrar',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('show_hide_section_noticias',[
			'label'       => __('Ocultar / Mostrar sección'),
			'type'        => 'radio',
			'section'     => 'noticias_home',
			'description' => '',
			'priority'    => 1,
			'choices'=> [
				'mostrar'=> __('Mostrar la sección','gym_club'),
				'ocultar'=> __('Ocultar la sección','gym_club'),
			]
		]);

		$wp_customize->add_setting( 'cantidad_noticias', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'mostrar',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('cantidad_noticias',[
			'label'       => __('Número de Artículos a Mostrar en la Sección'),
			'type'        => 'select',
			'section'     => 'noticias_home',
			'description' => '',
			'priority'    => 1,
			'choices'=> [
				'3'=> __('3','gym_club'),
				'6'=> __('6','gym_club'),
				'9'=> __('9','gym_club'),
			]
		]);

		$wp_customize->add_setting( 'titulo_noticias', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('titulo_noticias',[
			'label'       => __('Titulo de la Sección'),
			'type'        => 'text',
			'section'     => 'noticias_home',
			'description' => '',
			'priority'    => 2,
		]);
		/**
		 * SECCIÓN PROMOCIÓN 
		 */
		$wp_customize->add_section('promocion',[
			'title'       => 'Muestra promociones, y/o otros contenidos',
			'panel'       => 'opciones_gym',
		]);

		$wp_customize->add_setting( 'show_hide_section_promo', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'mostrar',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('show_hide_section_promo',[
			'label'       => __('Ocultar / Mostrar sección'),
			'type'        => 'radio',
			'section'     => 'promocion',
			'description' => '',
			'priority'    => 1,
			'choices'=> [
				'mostrar'=> __('Mostrar la sección','gym_club'),
				'ocultar'=> __('Ocultar la sección','gym_club'),
			]
		]);

		$wp_customize->add_setting( 'img_promo', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_promo', [
			'label'     => __( 'Imágen sección promo', 'gym_club' ),
			'section'   => 'promocion',
			'mime_type' => 'image',
			'priority'  => 3,
		] ) );

		$wp_customize->add_setting( 'titulo_promo', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		$wp_customize->add_control('titulo_promo',[
			'label'       => __('Titulo de la Sección'),
			'type'        => 'text',
			'section'     => 'promocion',
			'description' => '',
			'priority'    => 2,
		]);

		
		$wp_customize->add_control('texto_promo1',[
			'label'       => __('Contenido de la Sección'),
			'type'        => 'textarea',
			'section'     => 'promocion',
			'description' => '',
			'priority'    => 4,
		]);
		$wp_customize->add_setting( 'texto_promo1', [
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => '',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
		]);
		  
		 $wp_customize->add_setting( 'titulo_col_promo', [
		 	'type'                 => 'theme_mod', // or 'option'
		 	'capability'           => 'edit_theme_options',
		 	'theme_supports'       => '', // Rarely needed.
		 	'default'              => '',
		 	'transport'            => 'refresh', // or postMessage
		 	'sanitize_callback'    => '',
		 	'sanitize_js_callback' => '', // Basically to_json.
		 ]);
		 $wp_customize->add_control('titulo_col_promo',[
		 	'label'       => __('Titulo de la Columna'),
		 	'type'        => 'text',
		 	'section'     => 'promocion',
		 	'description' => '',
		 	'priority'    => 2,
		 ]);
	}
	add_action('customize_register','gym_customizer' );
}
// gparga@misena.edu.com
// 
