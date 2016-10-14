<?php
    $post = $wp_query->post;
    if(in_category('4')) {
    include(TEMPLATEPATH.'/category-tables.php');
    }else if(in_category('2')){
        include(TEMPLATEPATH.'/category-2.php');
    }
    else {
    include(TEMPLATEPATH.'/category-3.php');
    }
?>