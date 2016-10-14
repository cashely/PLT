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
                <a href="javascript:void(0);">首页</a>
                <span>|</span>
                <a href="location.html">
                    网站地图
                </a>
            </div>
            <div class="topbar-right">
                分享到：
                <a class="add" href="javascript:void(0);"></a>
                <a class="renren" href="javascript:void(0);"></a>
                <a class="weibo" href="javascript:void(0);"></a>
                <a class="sina" href="javascript:void(0);"></a>
                <a class="qqspace" href="javascript:void(0);"></a>
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