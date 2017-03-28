<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            if ($results) {
                foreach ($results as $row) {
                    echo $row -> username . "<br>";
                }
            }else{
                echo 'no data found';
            }
        ?>
    </body>
</html>
