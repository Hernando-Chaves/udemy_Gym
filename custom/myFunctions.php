<?php 
/**
 * Borrar Barra Admin 
 */
// add_filter('show_admin_bar','__return_false');

/**
 * Agrega tamaños de imagen 
 */
add_image_size( 'img_post', 750, 310, ['left','top'] );
add_image_size( 'entrenador_gallery', 400, 300,['left','top']);
add_image_size( 'foto-entrenador',350,525,['top','left']);

/**
 * Cambia el tamaño del excerpt 
 */
if(!function_exists('gym_change_excerpt_size'))
{
	function gym_change_excerpt_size()
	{
		$excerpt = get_the_content();
		$excerpt = preg_replace("([.*?])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 380);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
		$excerpt = $excerpt.'...<br> <a class="btn btn-sm btn-primary float-right" href="'.get_permalink().'">'.__("Ver Más","gym_club").'</a>';
		return $excerpt;
	}
}

 /**
  * Modifica el formulario de comentarios 
  */
if(!function_exists('gym_change_comment_form'))
{
	function gym_change_comment_form($args)
	{
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

		$author = '<div class="row mb-1">
					 <input placeholder="'.__( 'Name','gym_club' ) . ( $req ? ' *' : '' ).'" id="author" class="col-12 form-control p-3" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' />
				   </div>';
		$email = '<div class="row mb-1">
		             <div class="col-md-6">
		                <input placeholder="'.__( 'Correo','gym_club' ) . ( $req ? ' *' : '' ).'" class="form-control p-3" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' />
		             </div>';

	$url =         '<div class="col-md-6">
	                	<input class="form-control p-3" placeholder="'.__( 'Website','gym_club' ).'" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'"  />
		            </div>
		         </div>';
		$comment = '<div class="row mb-1"><textarea class="form-control col-12 p-3" placeholder="'. _x( 'Comment', 'gym_club' ).'" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>';

		$args['fields']['author'] = $author;
		$args['fields']['email'] = $email;
		$args['fields']['url'] = $url;
		$args['comment_field'] = $comment;

		return $args;
	}
	add_filter('comment_form_defaults','gym_change_comment_form' );
}

/**
 * Cambia el orden del formulario de comentarios 
 */
if(!function_exists('gym_change_order_comment_form'))
{
	function gym_change_order_comment_form($fields)
	{
		$val = $fields['comment'];
		unset($fields['comment']);

		$fields += array('comment' => $val );

		return $fields;
	}
	add_filter('comment_form_fields','gym_change_order_comment_form' );
}

