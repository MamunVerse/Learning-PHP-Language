<?php

class Color{
    public $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}
class FavColor{
    public $data;
    public $color;
    public function __construct($data, $color)
    {
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }

    function __clone(){
        $this->color = clone $this->color;
    }
}

$fc1 = new FavColor('Some Data', 'red');


$fc2 = clone $fc1;
print_r($fc1);
print_r($fc2);

$fc2->updateColor("Green");
print_r($fc1);
print_r($fc2);

//$fc1 = new FavColor('Some Data');
//
//$fc2 = clone $fc1;
//
//print_r($fc1);
//print_r($fc2);
//
//$fc2->setData("More Data");
//
//print_r($fc1);
//print_r($fc2);



