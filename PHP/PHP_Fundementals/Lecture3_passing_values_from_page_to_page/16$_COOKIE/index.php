<?php

// setcookie('fontSize', 25, time() + 60*30, '/');
setcookie('prefs[fontSize]', 25);
setcookie('prefs[favoriteCategory]', 'news');
setcookie('prefs[screenWidth]', 1024);
// echo $_COOKIE['fontSize'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <style >
            /*body{
                font-size: <?= $_COOKIE['fontSize'] ?>
            }*/
        </style>

    </head>

    <body>
        <p>Hi There!!</p>
        <?php

        if( isset($_COOKIE['prefs']) ){
            foreach ($_COOKIE['prefs'] as $key => $value) {
                echo '<li>' . htmlspecialchars($key) . ': ' . htmlspecialchars($value) . '</li>';
            }
        }
        ?>

    </body>
</html>
