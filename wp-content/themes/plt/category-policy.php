<?php
	get_header();
?>
<!--banner -->
    <div class="banner">
        <img src="<?php bloginfo('template_url'); ?>/images/banner_policy.jpg" alt="">
    </div>
<!--content -->
    <div class="content">
        <div class="">
            <h3 class="title">政策法规</h3>
            <span class="line"></span>
            <div  class="md-content">
                <div class="row-list list-block">
                <?php while(have_posts()):the_post(); ?>
                		<a href="<?php the_permalink(); ?>"><i>></i><?php the_title(); ?><span><?php the_time('Y-m-d')?></span></a>
                <?php endwhile; ?>
                </div>
                <div class="page_navi"><?php par_pagenavi(4); ?></div>
            </div>
        </div>
<?php
	get_footer();
?>