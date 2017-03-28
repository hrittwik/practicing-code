<?php

require 'blog.php';
use Blog\DB;

// FETCH ALL THE POSTS
$posts = DB\get('posts', $conn);

// var_dump($posts);
view('index', array(
    'posts' => $posts,
    'name' => 'Hrittwik'
));

?>
