<?php

// if ( !empty($_POST) ) {
//     # code...
//     print_r($_POST);
// }

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    if( mail('hrittwik@gmail.com', 'New Website Message', $_POST['message']) ){
        $_status = 'Thank you for your message.';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Post Practice</title>
        <style media="screen">
            form ul { margin: 0; padding: 0; }
            form li { list-style: none; margin-bottom: 1em;}
        </style>
    </head>
    <body>
        <h1>Contact Form</h1>
        <form class="" action="" method="post">
            <ul>
                <li>
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" value="">
                </li>

                <li>
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" value="">
                </li>

                <li>
                    <label for="message">Your Message:</label><br>
                    <textarea name="message" id='message' rows="8" cols="80"></textarea>
                </li>

                <li>
                    <input type="submit" name="" value="Go">
                </li>
            </ul>
        </form>

        <?php if( isset($status) ) echo $status ?>
    </body>
</html>
