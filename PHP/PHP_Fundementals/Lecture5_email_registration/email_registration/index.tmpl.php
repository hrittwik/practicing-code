<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Email Registration!!</title>
        <style>
            ul, li{
                margin: 0;
                padding: 0;
            }
            li{
                list-style: none;
            }
            .notice{
                color: red;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <h1>Email Registration For NewsLetter!!</h1>
        <form class="" action="" method="post">
            <ul>
                <li>
                    <p class='notice'>
                    <?php if (isset($status)) {
                        echo $status;
                    }?>
                    </p>

                    <label for="name">Name:</label>
                    <input type="text" name="name" value="<?= old('name'); ?> "> <br>

                    <label for="email">Email: </label>
                    <input type="text" name="email" value="<?= old('email'); ?>"><br>

                    <input type="submit" name=submit"" value="Sign Up!">
                </li>
            </ul>

        </form>
    </body>
</html>
