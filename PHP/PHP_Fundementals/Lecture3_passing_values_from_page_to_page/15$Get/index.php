
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> $Get </title>
    </head>
    <body>
        <?php
        if ( isset( $_GET['name'] ) ) {
            # code...
            echo htmlspecialchars($_GET['name']);
        } else {
            echo 'is not set';
        }
        ?>

        <a href="about.php?name=anu">About</a>
    </body>
</html>
