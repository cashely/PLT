<?php
	get_header();
?>
<!--banner -->
    <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="">
    </div>
<!--content -->
    <div class="content document">
        <h3 class="text-title"><?php the_title(); ?></h3>
        <span class="line"></span>
        <div class="document-content">
            <div class="time">
                发布日期：<?php the_time('Y年m月d日'); ?>
            </div>
            <div>
                <?php echo $post->post_content;?>
            </div>
        </div>
<?php
	get_footer();
?>