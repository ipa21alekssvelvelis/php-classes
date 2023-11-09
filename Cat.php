<?php
include_once 'Animal.php';
class Cat extends Animal{

    public function __construct($name, $age){
        echo "Puss in boots";
        parent::__construct($name, $age);
        
    }

    static function eat() {
        echo "I like whiskas";
    }

}

?>