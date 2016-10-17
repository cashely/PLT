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

	//分页代码
	function par_pagenavi($range = 9){
		global $paged, $wp_query;
		if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
		if($max_page > 1){if(!$paged){$paged = 1;}
		if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";}
		previous_posts_link(' 上一页 ');
	    if($max_page > $range){
			if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
			if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	    elseif($paged >= ($max_page - ceil(($range/2)))){
			for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
			if($i==$paged)echo " class='current'";echo ">$i</a>";}}
		elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
			for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
	    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
	    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
		next_posts_link(' 下一页 ');
	    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";}}
	}
?>