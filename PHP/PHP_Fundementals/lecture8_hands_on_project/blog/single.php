<?php

require 'blog.php';
use Blog\DB;

// FETCH ALL THE POSTS

$post = DB\get_by_id( (int)$_GET['id'], $conn);

if( $post ){
    $post = $post[0];

    view('single', array(
        'post' => $post
    ));
}else {
    header('location:/webalizer/Hello_world/lecture8_hands_on_project/blog/ ');
}
