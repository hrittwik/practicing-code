<?php

require 'classes/html.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?= HTML::items(array('item1', 'item2', 'item3', 'item4')); ?>
        <?= HTML::anchor('about/index.php', 'About Us'); ?>
    </body>
</html>
