<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GYM
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gym_club' ); ?></a>

	<header id="masthead" class="site-header container-fluid">
		<nav class="navbar navbar-expand container flex-column flex-md-row">
			<a href="<?php echo esc_attr(home_url('/')) ?>" class="navbar-brand ">
				<div class="site-branding col-md-4 ">
					<?php
						if( has_custom_logo())
						{
							the_custom_logo();
						} else { ?>					
							<h1 class="site-title text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php } ?>
				</div><!-- .site-branding -->
			</a>
			<!-- <button class="navbar-toggler mx-auto" data-target="#site-navigation" data-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button> -->

			<div id="site-navigation" class="main-navigation  collapse navbar-collapse  justify-content-md-end ">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'gym_club' ); ?></button> -->
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'container'       => 'div',
						'container_id'    => 'primary-menu',
						'container_class' => 'menu-gymMain-container w-100',
						'menu_class'      => 'd-flex flex-column flex-md-row',
						'menu_id'         => 'menu-id',
						'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					) );
				?>
			</div><!-- #site-navigation -->
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content container ">
		<div class="row">
