<?php
    $month = "januaryasd";

    // if($month === "january"){
    //     echo 'its jan';
    // } else if ($month == "february") {
    //     echo 'its feb';
    //     echo 'none of the month';
    // } else{
    //     echo 'none of the month';
    // }

    // switch ($month) {
    //     case 'january':
    //         # code...
    //         echo "it's jan"
    //         break;
    //
    //     case 'february':
    //         # code...
    //         echo "it's feb"
    //         break;
    //
    //     default:
    //         # code...
    //         echo "not the right month";
    //         break;
    // }

    $months = [
        'january' => 'its jan',
        'february' => 'its feb',
        'march' => 'its march'
    ];

    echo isset($months[$month]) ? $months[$month] : 'not included' ;



?>
