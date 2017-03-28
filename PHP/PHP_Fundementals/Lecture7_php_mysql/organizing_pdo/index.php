<?php
require 'functions.php';
use Blog\DB;

$conn = DB\connect($config);

if ($conn) {
    // echo 'Connected';
    $users = DB\get('users', $conn);
}else{
    echo 'Could not connect to the db';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($users) {
            foreach ($users as $user) {
                echo "<li>{$user['username']}</li>";
            }
        }else{
            echo 'no rows returned';
        }
        ?>
    </body>
</html>
