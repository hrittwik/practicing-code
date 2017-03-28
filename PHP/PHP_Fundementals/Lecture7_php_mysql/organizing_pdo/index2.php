<?php

require 'functions.php';

$conn = connect($config);

if($conn){
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 6;

    $row = query("SELECT * FROM users WHERE id = :id",
                    array('id' => $id),
                    $conn)[0];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php if($row) : ?>
            <h1> <?= $row['username']; ?>'s profile </h1>
        <?php else: ?>
            <h1>No user!</h1>
        <?php endif; ?>
    </body>
</html>
