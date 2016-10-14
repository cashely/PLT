<?php
	get_header();
?>
<!--banner -->
    <div class="banner">
        <img src="images/banner.jpg" alt="">
    </div>
    archive
<!--content -->
    <div class="content document">
        <h3 class="text-title"><?php the_title(); ?></h3>
        <span class="line"></span>
        <div class="document-content">
            <div class="time">
                发布日期：<?php the_time('y年m月d日') ?>
            </div>

            <?php echo $post->post_content;?>
        </div>
<?php
	get_footer();
?>