<?php
	get_header();
?>
<!--banner -->
    <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/images/results-banner.jpg" alt="">
    </div>
<!--content -->
    <div class="content document">
        <?php while(have_posts()):the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="results_list">
                <div class="title media-left">
                    <div class="wrap">
                        <h4>2016 &nbsp;10</h4>
                        <div class="day">09</div>
                    </div>
                </div>
                <div class="media-text">
                    <h3><?php the_title(); ?></h3>
                    <p>
                       <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 205,"……"); ?>
                    </p>
                </div>
            </a>
         <?php endwhile; ?>
        <!--icon -->
        <div class="icon">
            <a href="javascript:void(0);"><img src="images/contact.png" alt=""></a>
            <a href="javascript:void(0);"><img src="images/top.png" alt=""></a>
        </div>
    </div>
<?php
	get_footer();
?>