<?php get_header(); ?>
<!--banner -->
    <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/images/banner_newsCenter.jpg" alt="">
    </div>
<!--content -->
   <!--content -->
   <div class="content">
       <div class="newsCenter">
           <h3 class="title">
               中心新闻
           </h3>
           <span class="line"></span>
           <div class="newsCenter-list">
           <?php while(have_posts()):the_post(); ?>
               <a href="" class="item">
               <?php if ( has_post_thumbnail() ) { ?>
               <?php the_post_thumbnail('indexNews'); ?>
               <?php } else {?>
               <img class="lf" src="<?php bloginfo('template_url');?>/images/list01.jpg" alt="">
               <?php } ?>
                   <div class="media-text">
                       <h3><?php echo wp_trim_words(get_the_title(),13); ?></h3>
                       <p><?php echo wp_trim_words(get_the_excerpt(),100)?></p>
                   </div>
               </a>
                <?php endwhile; ?>
                <div class="page_navi"><?php par_pagenavi(4); ?></div>
           </div>
       </div>
   </div>
<?php get_footer(); ?>