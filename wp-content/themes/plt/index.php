<?php
	get_header();
?>
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
            <form id="docSearch" action="">
                <input type="text" class="search" placeholder="请输入关链词"/>
            </form>
        </div>
    </div>
<!--banner -->
    <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt=""/>
    </div>
<!--content -->
    <div class="content">
        <div class="of-hide">
            <div class="lf md-notice">
                <h3 class="title">最新通知公告</h3>
                <div class="md-content">
                <?php query_posts('showposts=1&cat=2')?>
                	<?php while(have_posts()):the_post(); ?>
						<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail('notice'); ?>
						<?php } else {?>
						<img src="图片地址" alt="替代文本" />
						<?php } ?>
	                    <div class="md-content-list">
	                        <a class="list-title" href="<?php the_permalink(); ?>"><span>最新</span><?php echo wp_trim_words(get_the_title(),15); ?></a>
	                        <a href="javascript:void(0);"><?php echo wp_trim_words(get_the_excerpt(),40)?></a>
	                    </div>
                <?php endwhile; wp_reset_query(); ?>
                <?php query_posts('showposts=1&offset=1&cat=2'); ?>
                	<?php while (have_posts()) : the_post(); ?>
	                    <div class="md-content-list">
	                        <a class="list-title" href="<?php the_permalink(); ?>"><span>最新</span><?php echo wp_trim_words(get_the_title(),15); ?></a>
	                        <a href="javascript:void(0);"><?php echo wp_trim_words(get_the_excerpt(),40)?></a>
	                    </div>
                <?php endwhile; wp_reset_query(); ?>
                    <a class="more">more>></a>
                </div>
            </div>
            <div class="lf project">
                <h3 class="title">近期培训项目</h3>
                <div  class="md-content">
                    <div class="md-content-list">
                    	<?php query_posts('showposts=4&cat=3'); ?>
		                	<?php while (have_posts()) : the_post(); ?>
			                    <a href="<?php the_permalink(); ?>">
			                    	<?php if ( has_post_thumbnail() ) { ?>
									<?php the_post_thumbnail('indexTrain'); ?>
									<?php } else {?>
									<img class="lf" src="<?php bloginfo('template_url'); ?>/images/project01.jpg" alt="">
									<?php } ?>
		                            <p><?php the_title(); ?></p>
		                        </a>
		                <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <a class="more">more>></a>
                </div>
            </div>
            <div class="lf course">
                <h3 class="title">
                    最新报名课程
                    <span></span>
                </h3>
                <div  class="md-content">
                    <div class="row-list">
                    	<?php query_posts('showposts=4&cat=3'); ?>
		                	<?php while (have_posts()) : the_post(); ?>
		                		<h4><?php the_time('Y年m月d日') ?></h4>
			                    <a href="<?php the_permalink(); ?>">
			                    	<i>></i>
		                            <?php the_title(); ?>
		                        </a>
		                <?php endwhile; wp_reset_query(); ?>
                        
                    </div>
                    <a class="more">more>></a>
                </div>
            </div>
        </div>
        <div class="news row">
            <h3 class="title">中心新闻</h3>
            <span class="line"></span>
            <div  class="md-content">
            	<?php query_posts('showposts=4&cat=3'); ?>
                	<?php while (have_posts()) : the_post(); ?>

						<div class="md-content-list">
		                    <h4><?php echo wp_trim_words(get_the_title(),13); ?></h4>
		                   <div class="list-main">
		                   		<?php if ( has_post_thumbnail() ) { ?>
									<?php the_post_thumbnail('indexNews'); ?>
									<?php } else {?>
									<img class="lf" src="<?php bloginfo('template_url'); ?>/images/news01.jpg" alt="">
									<?php } ?>
		                       <p>
		                           <?php echo wp_trim_words(get_the_excerpt(),30)?>
		                           <a href="<?php the_permalink(); ?>" class="more">more>></a>
		                       </p>
		                   </div>
		                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
        <div class="friendlink">
            <h3 class="title">友情链接</h3>
            <span class="line"></span>
            <div  class="md-content">
                <div class="md-content-list">
                	<?php 
                		$args = array(
						    'orderby'          => 'name',
						    'order'            => 'ASC',
						    'limit'            => -1,
						    'category'         => ' ',
						    'exclude_category' => ' ',
						    'category_name'    => ' ',
						    'hide_invisible'   => 1,
						    'show_updated'     => 0,
						    'echo'             => 1,
						    'categorize'       => 1,
						    'title_li'         => __('Bookmarks'),
						    'title_before'     => '<h2>',
						    'title_after'      => '</h2>',
						    'category_orderby' => 'name',
						    'category_order'   => 'ASC',
						    'class'            => 'linkcat',
						    'category_before'  => '<li id=%id class=%class>',
						    'category_after'   => '</li>' 
						);
                		wp_list_bookmarks( $args ); 
                	?>
                    <a href="javascript:void(0);"><img src="images/friendlink01.jpg" alt=""></a>
                    <a href="javascript:void(0);"><img src="images/friendlink02.jpg" alt=""></a>
                    <a href="javascript:void(0);"><img src="images/friendlink03.jpg" alt=""></a>
                    <a href="javascript:void(0);"><img src="images/friendlink04.jpg" alt=""></a>
                    <a href="javascript:void(0);"><img src="images/friendlink05.jpg" alt=""></a>
                    <a href="javascript:void(0);"><img src="images/friendlink06.jpg" alt=""></a>
                    <a href="javascript:void(0);"><img src="images/friendlink07.jpg" alt=""></a>
                    <a href="javascript:void(0);"><img src="images/friendlink08.jpg" alt=""></a>
                    <span class="justify_fix"></span>
                </div>
            </div>
        </div>
        <!--icon -->
        <div class="icon">
            <a href="javascript:void(0);"><img src="images/contact.png" alt=""></a>
            <a href="javascript:void(0);"><img src="images/top.png" alt=""></a>
        </div>
    </div>
<!--footer -->
    <div class="footer">
        <div class="footer-box">
            <div class="links">
                <a href="#">首页</a>
                <span>|</span>
                <a href="#">中心简介</a>
                <span>|</span>
                <a href="#">通知公告</a>
                <span>|</span>
                <a href="#">培训项目</a>
                <span>|</span>
                <a href="#">报名入口</a>
                <span>|</span>
                <a href="#">知识库</a>
                <span>|</span>
                <a href="#">表格下载</a>
                <span>|</span>
                <a href="#">网上培训</a>
            </div>
            <p>
                <span>版权所有 <a href="javascript:void(0);">广东顺德食品药品教育服务网</a></span>
                <span class="location">地址：<a href="javascript:void(0);">广东省顺德市石岛管理区黄海中路218号</a></span>
                <span> 粤ICP备06028705</span>
            </p>
        </div>
    </div>
<?php
	get_footer();
?>