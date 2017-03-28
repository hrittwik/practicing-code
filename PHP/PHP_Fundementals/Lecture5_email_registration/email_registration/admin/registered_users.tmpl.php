<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <!-- NEEDS TO BE LOCKED DOWN -->
        <h1>
            Folks on your mailing list.
        </h1>
        <?php
            if ( $registered_users) {
                foreach ($registered_users as $user) {
                    list($name, $email) = $user;
                    echo "<li>$name: <a href='mailto:$email'>$email</a></li>";
                }
            } else {
                echo '<li> No registered user found!</li>';
            }
        ?>
    </body>
</html>
