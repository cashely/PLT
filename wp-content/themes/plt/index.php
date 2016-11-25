<?php
	get_header();
?>
<!--banner -->
<div class="banner">
    <!-- Jssor Slider Begin -->
    <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0; left: 0; width: 1400px; height: 316px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0; top: 0; width: 1400px; height: 316px; overflow: hidden;">
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/images/banner.jpg" />
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/images/banner02.jpg" />
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/images/banner03.jpg" />
            </div>
        </div>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="bottom: 15px; right: 6px;">
            <div u="prototype"></div>
        </div>
    </div>
    <!-- Jssor Slider End -->
</div>
<script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {

        var options = {
            $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $Idle: 4000,                                        //时间间隔
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
            $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20

            $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                  //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Rows: 1,                                       //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        //responsive code begin
        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth;
            if (bodyWidth)
                jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>
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
						<img src="<?php bloginfo('template_url'); ?>/images/new_nnotice.jpg" alt="替代文本" />
						<?php } ?>
	                    <a href="<?php the_permalink(); ?>" class="md-content-list">
	                        <span class="list-title"><span>最新</span><?php echo wp_trim_words(get_the_title(),15); ?></span>
	                        <p href="javascript:void(0);"><?php echo wp_trim_words(get_the_excerpt(),40)?></p>
	                    </a>
                <?php endwhile; wp_reset_query(); ?>
                <?php query_posts('showposts=1&offset=1&cat=2'); ?>
                	<?php while (have_posts()) : the_post(); ?>
	                    <a href="<?php the_permalink(); ?>" class="md-content-list">
	                        <span class="list-title" ><span>最新</span><?php echo wp_trim_words(get_the_title(),15); ?></span>
	                        <p><?php echo wp_trim_words(get_the_excerpt(),40)?></p>
	                    </a>
                <?php endwhile; wp_reset_query(); ?>
                    <a class="more" href="<?php echo get_category_link(2) ?>">more>></a>
                </div>
            </div>
            <div class="lf lately-project">
                <h3 class="title">近期培训项目</h3>
                <div  class="md-content">
                    <div class="md-content-list">
                    	<?php query_posts('showposts=4&cat=3'); ?>
		                	<?php while (have_posts()) : the_post(); ?>
			                    <a href="<?php the_permalink(); ?>">
			                    	<?php if ( has_post_thumbnail() ) { ?>
									<?php the_post_thumbnail('indexTrain'); ?>
									<?php } else {?>
									<img class="lf" src="<?php bloginfo('template_url');?>/images/project01.jpg" alt="">
									<?php } ?>
		                            <p><?php the_title(); ?></p>
		                        </a>
		                <?php endwhile; wp_reset_query(); ?>
                    </div>
                      <a class="more" href="<?php the_permalink(4); ?>">more>></a>
                </div>
            </div>
            <div class="lf course">
                <h3 class="title">
                    最新报名课程
                    <span></span>
                </h3>
                <div  class="md-content">
                    <div class="row-list mg-top">
                    	<?php query_posts('showposts=4&cat=18'); ?>
		                	<?php while (have_posts()) : the_post(); ?>
		                		<h4><?php the_time('Y年m月d日') ?></h4>
			                    <a href="<?php bloginfo('url'); ?>/regist">
			                    	<i>></i>
		                            <?php the_title(); ?>
		                        </a>
		                <?php endwhile; wp_reset_query(); ?>
                        
                    </div>

                </div>
                     <a href="<?php bloginfo('url'); ?>/regist" class="more" >more>></a>
            </div>
        </div>
        <div class="news row">
            <h3 class="title">中心新闻</h3>
            <a class="title-more" href="<?php echo get_category_link(12) ?>">查看更多></a>
            <span class="line"></span>
            <div  class="md-content">
            	<?php query_posts('showposts=4&cat=12'); ?>
                	<?php while (have_posts()) : the_post(); ?>
						<a  href="<?php the_permalink(); ?>" class="md-content-list">
		                    <h4><?php echo wp_trim_words(get_the_title(),13); ?></h4>
		                   <div class="list-main">
		                   		<?php if ( has_post_thumbnail() ) { ?>
									<?php the_post_thumbnail('indexNews'); ?>
									<?php } else {?>
									<img class="lf" src="<?php bloginfo('template_url'); ?>/images/news01.jpg" alt="">
									<?php } ?>
		                       <p>
		                           <?php echo wp_trim_words(get_the_excerpt(),30)?>
		                           <span class="more">more</span>
		                       </p>
		                   </div>
		                </a>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
        <div class="friendlink">
            <h3 class="title">友情链接</h3>
            <span class="line"></span>
            <div  class="md-content">
                <div class="md-content-list">
                 <?php wp_list_bookmarks('title_li=&categorize=0&orderby=id&show_description=0'); ?>
                </div>
            </div>
        </div>
<?php
	get_footer();
?>