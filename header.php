<!DOCTYPE HTML>
<HTML LANG="EN-US">
	<HEAD>
		<META CHARSET="<?php bloginfo('charset'); ?>" />
		<TITLE><?php bloginfo('name'); ?> | <?php wp_title(); ?></TITLE>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<?php wp_head(); ?>
	</HEAD>
<BODY>
<div id="wrapper">
	<div id="header">
	<div id="logo">
		<h2><?php bloginfo('name'); ?></h2>
		<h4><?php bloginfo('description'); ?></h4>
		<div id="menu">
			<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
		</div>
	</div> <!--End of Logo-->
 	</div> <!--End of Header-->