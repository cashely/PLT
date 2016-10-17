<?php
	get_header();
?>
<!--banner -->
    <div class="banner">
        <img src="<?php bloginfo('template_url');?>/images/banner-notice.jpg" alt="">
    </div>
<!--content -->
    <div class="content notice">
        <div class="md-content">
            <h3 class="notice-title">
                通知公告 <span>|</span>食品
                <a href="<?php echo get_category_link(6) ?>">查看更多></a>
            </h3>
            <div  class="notice-list">
                <img class="lf" src="<?php bloginfo('template_url');?>/images/notice_slider.jpg" alt="">
                <div class="lf list-rt">
                    <!--<h3 class="title">-->
                        <!--<a href="javascript:void(0);">近期</a>-->
                        <!--<span>|</span>-->
                        <!--<a href="javascript:void(0);">以往</a>-->
                    <!--</h3>-->
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
        </div>
        <div class="md-content mgTop-50">
            <h3 class="notice-title">
                通知公告 <span>|</span>药品
                <a href="<?php echo get_category_link(7) ?>">查看更多></a>
            </h3>
            <div  class="notice-list">
                <img class="lf" src="<?php bloginfo('template_url');?>/images/notice_slider.jpg" alt="">
                <div class="lf list-rt">
                    <!--<h3 class="title">-->
                        <!--<a href="javascript:void(0);">近期</a>-->
                        <!--<span>|</span>-->
                        <!--<a href="javascript:void(0);">以往</a>-->
                    <!--</h3>-->
                    <div class="row-list">
                        <?php query_posts('showposts=6&cat=7')?>
                    	<?php while(have_posts()):the_post()?>
                        <a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><i>></i><?php echo wp_trim_words(get_the_title(),25);?><span class="time"><?php the_time('Y-m-d');?></span></a>
                    	<?php endwhile;wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>

<?php
	get_footer();
?>