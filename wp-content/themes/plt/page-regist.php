<?php
	get_header();
?>
<!--banner -->
    <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/images/banner-login.jpg" alt="">
    </div>
<!--content -->
    <div class="content">
        <div class="login">
            <h3 class="title">网上报名</h3>
            <span class="line"></span>
            
            <?php while (have_posts()) : the_post(); ?>
	        		<?php the_content();?>
	        <?php endwhile;?>
        </div>
<?php
	get_footer();
?>