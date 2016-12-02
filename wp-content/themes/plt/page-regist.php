<?php
	get_header();
?>
<!--banner -->
    <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/images/banner-login.jpg" alt="">
    </div>
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