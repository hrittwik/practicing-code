<?php

$images = glob('images/m*.txt', GLOB_BRACE);


foreach ($images as $img) {


    // EXTRACT WAY
    extract(pathinfo($img));
    echo $filename;
    echo '<br>';

    // array way
    $filename = pathinfo($img, PATHINFO_FILENAME);
    echo $filename;
    echo '<br>';

    $another_filename =  basename($img, '.txt');
    echo $another_filename;

}
?>
