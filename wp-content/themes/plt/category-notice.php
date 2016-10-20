<?php
	get_header();
?>
<!--banner -->
<div class="banner">
    <img src="<?php bloginfo('template_url');?>/images/banner_notice.jpg" alt="">
</div>
<!--content -->
<div class="content notice">
    <div class="notice-drug">
        <h3 class="title">
            <span>通知公告</span>
            药品
        </h3>
        <a class="title-more" href="<?php echo get_category_link(6) ?>">查看更多></a>
        <span class="line"></span>
        <div class="drug-content">
            <div class="img">
                <!-- Jssor Slider Begin -->
                <div style=" width: 446px;margin: 0 auto">
                    <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
            top: 0; left: 0; width: 446px; height: 297px; overflow: hidden;">
                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0; top: 0; width: 446px; height: 297px; overflow: hidden;">
                            <div>
                                <img u="image" src="<?php bloginfo('template_url');?>/images/notice_drug_img.jpg" />
                            </div>
                        </div>
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb21" style="bottom: 15px; right: 6px;">
                            <div u="prototype"></div>
                        </div>
                    </div>
                    <!-- Jssor Slider End -->
                    <!--<img src="images/project_drug_img.jpg" alt="">-->
                </div>
            </div>
            <div class="row-list">
            <?php query_posts('showposts=6&cat=6')?>
                <?php while(have_posts()):the_post()?>
                 <a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><i>></i><?php echo wp_trim_words(get_the_title(),25);?><span class="time"><?php the_time('Y-m-d');?></span></a>
                 <?php endwhile;wp_reset_query(); ?>
                 <?php
                      wp_link_pages( array(
            			   'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
            			   'after'       => '</div>',
            			   'link_before' => '<span>',
            			   'link_after'  => '</span>',
            				) );
                 ?>
               </div>
        </div>
    </div>
    <div class="notice-food row">
        <h3 class="title">
            <span>通知公告</span> 食品
        </h3>
        <a class="title-more" href="<?php echo get_category_link(7) ?>">查看更多></a>
        <span class="line"></span>
        <div  class="md-content">
         <?php query_posts('showposts=3&cat=7'); ?>
            <?php while (have_posts()) : the_post(); ?>
            <a  href="<?php the_permalink(); ?>" class="md-content-list">
                <div class="list-main">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <?php the_post_thumbnail('indexNews'); ?>
                     <?php } else {?>
                     <img class="lf" src="<?php bloginfo('template_url');?>/images/notice_food01.jpg" alt="">
                     <?php } ?>
                    <h4><?php echo wp_trim_words(get_the_title(),13); ?></h4>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(),100)?>
                    </p>
                </div>
            </a>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>
<script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {

        var options = {
            $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $Idle: 4000,                                        //时间间隔
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
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
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth);
            }
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
<?php
	get_footer();
?>