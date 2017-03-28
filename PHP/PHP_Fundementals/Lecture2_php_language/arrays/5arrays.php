<?php
    $fav_websites = [
        'hackerrank' => 'https://www.hackerrank.com',
        'udacity' => 'https://www.udacity.com',
        'khanacademy' => 'https://www.khanacademy.org',
        'gmail' => 'https://mail.google.com'
    ];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>arrays</title>

    </head>
    <body>
        <h1>My Favourite Websites</h1>
            <ul>
                <?php
                    foreach ($fav_websites as $name => $url) {
                        echo "<li> <a href = '$url'> " .  ucwords($name) . "</a> </li>";
                    }
                ?>
            </ul>

    </body>
</html>
