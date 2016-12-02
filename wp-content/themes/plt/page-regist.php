<?php
	get_header();
?>
<!--banner -->
<div class="banner">
    <!-- Jssor Slider Begin -->
    <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0; left: 0; width: 1400px;height: 145px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0; top: 0; width: 1400px;height: 145px; overflow: hidden;">
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/images/banner-login.jpg" />
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/images/banner-login01.jpg" />
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/images/banner-login02.jpg" />
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
    <div class="content login">
        <div class="login">
           <div class="process">
               <img src="<?php bloginfo('template_url'); ?>/images/processImg.jpg" alt=""/>
                    <div>
                        <span class="process-left">网上报名</span>
                        <span>现场提交资料确认，缴费</span>
                        <span class="process-right">报名成功</span>
                    </div>
                </div>

           <div class="titlebar">
                <h3 class="title">网上报名</h3>
                <span class="line"></span>
           </div>
           <?php while (have_posts()) : the_post(); ?>
	        	<?php the_content();?>
	       <?php endwhile;?>
        </div>
<?php
	get_footer();
?>