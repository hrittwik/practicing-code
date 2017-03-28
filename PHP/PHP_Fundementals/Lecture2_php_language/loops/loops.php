<?php
    $arr = ['rony', 'arnob'];
    //
    // $arr = [
    //     'rony' => 'friend',
    //     'tahmid' => 'friend',
    //     'wahid' => 'friend',
    //     'fawadul' => 'friend',
    //     'koushik' => 'friend',
    //     'arnob' => 'friend'
    // ];

    // foreach ($arr as $key => $value) {
    //     # code...
    //     echo "<p>$key => $value</p> ";
    // }
    $i = 0;
    while($i < 2){
        echo "<li>$arr[$i]</li>";
        $i++;
    }

?>
