<?php
include 'functions.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    // echo $_POST['name']; die();
    if ( empty($name) || empty($email) || !valid_email($email) ) {
        $status = 'Please fill up valid username and password!!';
    } else{
        add_registered_user($name, $email);
        $status = "you've been successfully registered for newsletter.";
    }
}


require 'index.tmpl.php';
?>
