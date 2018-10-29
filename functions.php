<?php 
	function mycustomtheme_nav(){
		register_nav_menu('primary','Top Navigation');
	}
	add_action('init','mycustomtheme_nav');

	function mycustomtheme_footer_nav(){
		register_nav_menu('footer','Footer Navigation');
	}
	add_action('init','mycustomtheme_footer_nav');

	
?>