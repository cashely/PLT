<?php
	get_header();
?>
<!--banner -->
    <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="">
    </div>
<!--content -->
    <div class="content">
        <div class="training row">
             <h3 class="title">网络课程视频</h3>
             <span class="line"></span>
             <div  class="md-content">
             	 <?php query_posts('showposts=4&cat=5'); ?>
                     <?php while (have_posts()) : the_post(); ?>
                         <div class="md-content-list">
                             <a href="<?php the_permalink();?>" class="list-main">
                             <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail('indexNews'); ?>
                             	<?php } else {?>
                             	<img src="<?php bloginfo('template_url'); ?>/images/news01.jpg" alt="">
                             	<?php } ?>
                                 <p>
                                    <?php echo wp_trim_words(get_the_title(),20); ?>
                                 </p>
                             </a>
                         </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
    <div class="online-learning">
         <h3 class="title">在线学习功能</h3>
              <span class="line"></span>
                    <div  class="md-content">
                           <div class="row-list list-block">
                                <?php while(have_posts()):the_post(); ?>
                                   	<a href="<?php the_permalink(); ?>"><i>></i><?php the_title(); ?><span><?php the_time('Y-m-d')?></span></a>
                                    <?php endwhile; ?>
                           </div>
                    </div>
    </div>
<?php
	get_footer();
?>