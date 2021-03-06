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
        <?php while(have_posts()):the_post()?>
            <div class="document-content">
                <div class="release-time">
                    发布日期：<?php the_time('Y年m月d日'); ?>
                </div>
                <div>
                    <?php the_content();?>
                </div>
            </div>
        <?php endwhile;?>
<?php
	get_footer();
?>