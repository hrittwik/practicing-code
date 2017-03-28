<?php

// class Database{
//
// }

class House{
    public $home_color = 'white';
    public $rooms = 3;
    public $for_sale = true;

    public function __construct($home_color=null){
        if($home_color){
            $this->home_color = $home_color;
        }
    }

    public function add_room(){
        $this->rooms++;
    }

    public function sell(){
        $this->for_sale = false;
    }
}

$house = new House('red');
// echo $house->home_color;
// echo "<br>";

$house->add_room();
$house->add_room();


echo "This {$house->home_color} house has {$house->rooms} rooms. ";

echo($house->for_sale)
    ? "It is for sale. "
    : "It is not for sale. ";

echo "<br>";

$house = new House();

$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();
$house->add_room();

echo "This {$house->home_color} house has {$house->rooms} rooms.  ";
$house->sell();

echo($house->for_sale)
    ? "It is for sale."
    : "It is not for sale.";

?>
