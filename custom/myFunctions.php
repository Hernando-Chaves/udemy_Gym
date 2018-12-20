<?php 
/**
 * Borrar Barra Admin 
 */
// add_filter('show_admin_bar','__return_false');

/**
 * Agrega tamaños de imagen 
 */
add_image_size( 'img_post', 750, 310, ['left','top'] );

/**
 * Cambia el tamaño del excerpt 
 */
if(!function_exists('gym_change_excerpt_size'))
{
	function gym_change_excerpt_size()
	{
		$excerpt = get_the_content();
		$excerpt = preg_replace(" ([.*?])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 380);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
		$excerpt = $excerpt.'...<br> <a class="btn btn-sm btn-primary float-right" href="'.get_permalink().'">'.__("Ver Más","gymclub").'</a>';
		return $excerpt;
	}
}
