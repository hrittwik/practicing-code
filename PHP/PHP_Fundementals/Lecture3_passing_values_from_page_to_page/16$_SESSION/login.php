<?php

include 'config.php';
include 'functions.php';
session_start();

if( isset($_POST['loginForm'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if( validate_user_credentials($username, $password) ){
        $_SESSION['username'] = $username;
        header("Location: admin.php");
    } else {
        $status = 'invalid login credentials';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Login</h1>
        <form class="" action="" method="post">
            <ul>
                <li>
                    <label for="username">Username: </label>
                    <input type="text" name="username" value="">
                </li>
                <li>
                    <label for="password">Password: </label>
                    <input type="password" name="password" value="">
                </li>
                <li>
                    <input type="submit" name="loginForm" value="Login">
                </li>
            </ul>

            <?php
            if(isset($status)){
                echo $status;
            }
            ?>
        </form>
    </body>
</html>
