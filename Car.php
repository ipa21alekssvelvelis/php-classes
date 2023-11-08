<?php
class Car{

    public $brand;
    private $mileage = 0;

    function __construct($brand, $mileage){
        $this->brand = $b;
        $this->mileage = $m;
    }

    function __destruct(){
        echo $this->brand . " is dead"; 
    }


    static function makeNoise() {
        echo "Beep, beep!!!";
    }

}

?>