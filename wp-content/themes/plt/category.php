<?php
    $post = $wp_query->post;
    if(in_category('4')) {
    include(TEMPLATEPATH.'/category-tables.php');
    }else if(in_category('5')){
        include(TEMPLATEPATH.'/category-online.php');
    }
    else {
    include(TEMPLATEPATH.'/category-3.php');
    }
?>