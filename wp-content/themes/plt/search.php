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
                        <h4><?php the_time('Y')?> &nbsp;<?php the_time('m')?></h4>
                        <div class="day"><?php the_time('d')?></div>
                    </div>
                </div>
                <div class="media-text">
                    <h3><?php the_title(); ?></h3>
                    <p>
                       <?php echo wp_trim_words(get_the_content(),205); ?>
                    </p>
                </div>
            </a>
         <?php endwhile; ?>
         <div class="page_navi"><?php par_pagenavi(4); ?></div>
<?php
	get_footer();
?>