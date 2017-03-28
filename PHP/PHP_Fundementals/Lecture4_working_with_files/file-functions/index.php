<?php

// basename
// dirname
// pathinfo
// substr
// extract



$images = glob('img/*.{png,jpg,jpeg}', GLOB_BRACE );
foreach ($images as $img) {
    // echo basename($img);
    // print_r(pathinfo($img));

    // $info = pathinfo($img);
    extract(pathinfo($img));

    // echo $info['extension'];
    // echo "\r";

    // echo pathinfo($img, PATHINFO_EXTENSION);
    // echo "\n";
    $thumb_name = "{$filename}-thumb.{$extension}";
    // $thumb_name = $info['filename'] . '-thumb.' . $info['extension'];
    echo $thumb_name . "\n";

}

?>
