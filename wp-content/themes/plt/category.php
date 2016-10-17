<?php get_header(); ?>
<!--banner -->
    <div class="banner">
        <img src="images/banner-table.jpg" alt="">
    </div>
<!--content -->
    <div class="content">
        <div class="">
            <h3 class="title"><?php single_cat_title(); ?></h3>
            <span class="line"></span>
            <div  class="md-content">
                <div class="row-list list-block">
                <?php while(have_posts()):the_post(); ?>
                        <a href="<?php the_permalink(); ?>"><i>></i><?php the_title(); ?><span><?php the_time('Y-m-d')?></span></a>
                <?php endwhile; ?>
                </div>
            </div>
            <div class="paging-package">
                <ul class="paging">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
<?php get_footer(); ?>