<?php
include_once 'Animal.php';
class Cat extends Animal{

    public function __construct(){
        echo "Puss in boots";
    }

    public function birthday(){
        $this->age = $age+1;
        echo $this->age;
    }

    static function eat() {
        echo "I like whiskas";
    }

}

?>