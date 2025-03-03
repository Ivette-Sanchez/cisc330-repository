<?php
namespace classes;

class Cake {
    public $name;
    public $price;
    public $flavor;

    //constructor to initialize the Cake properties
    public function __construct($name, $price, $flavor) {
        $this->name = $name;
        $this->price = $price;
        $this->flavor = $flavor;
    }

    public function array() { //making the associative array
        return [
            'name' => $this->name,
            'price' => $this->price,
            'flavor' => $this->flavor,
        ];
    }


    //returning JSON
    public function getJson() {
        return json_encode($this->array());
    }
}
 

