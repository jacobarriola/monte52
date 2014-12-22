<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Monte 52
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">

    <section class="tab-bar">
      <section class="left-small">
        <a role="button" href="#idOfLeftMenu" class="left-off-canvas-toggle menu-icon"><span></span></a>
      </section>
    </section>

    <!-- off canvas menu -->
    <nav class="left-off-canvas-menu">
	<ul>
		<?php 
			wp_nav_menu( array( 
				'theme_location' 	=> 'primary',
				'container'			=> false,
				'menu_class'		=> '',
				'menu_id'			=> '',
				'items_wrap'      	=> '%3$s'
			) ); 
		?>
	</ul>
    </nav>