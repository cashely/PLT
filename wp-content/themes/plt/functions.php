<?php
	function twentysixteen_widgets_init() {
		
	}
	add_action( 'widgets_init', 'twentysixteen_widgets_init' );
	if(function_exists('register_nav_menus')){
		register_nav_menus(array(
			'primary' => '导航菜单',
			'footerMenu' => '底部菜单'
		));
	};
	//添加缩略图功能
	add_theme_support('post-thumbnails');
	add_image_size('notice',287,143,true);
	add_image_size('indexTrain',79,61,true);
	add_image_size('indexNews',211,83,true);
?>