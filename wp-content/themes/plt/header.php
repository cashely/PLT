<?php
	
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- <title>Title</title> -->
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
<!--topbar -->
    <div class="topbar">
        <div class="topbar-box">
            <div class="topbar-left">
                <a href="/">首页</a>
                <span>|</span>
                <a href="location.html">
                    网站地图
                </a>
            </div>
                
            <div class="bdsharebuttonbox topbar-right" data-tag="share_1">
				<a class="bds_mshare" data-cmd="mshare"></a>
				<a class="bds_qzone" data-cmd="qzone" href="#"></a>
				<a class="bds_tsina" data-cmd="tsina"></a>
				<a class="bds_baidu" data-cmd="baidu"></a>
				<a class="bds_renren" data-cmd="renren"></a>
				<a class="bds_tqq" data-cmd="tqq"></a>
				<a class="bds_more" data-cmd="more"></a>
				<!-- <a class="bds_count" data-cmd="count"></a> -->
			</div>
        </div>
    </div>
<!--header -->
    <div class="header">
        <a href="#" class="logo"></a>
        <div class="nav">
        	<div class="menu-menu-1-container">
            <?php
				if(function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location'=>'primary'));
				}
			?>
			</div>
            <form id="docSearch" role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" value="<?php echo get_search_query(); ?>" name="s"  class="search" placeholder="请输入关链词"/>
            </form>
        </div>
    </div>