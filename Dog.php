<?php
include_once 'Animal.php';
class Dog extends Animal{

    public function birthday(){
        $this->age = $age+1;
        echo $this->age;
    }

    static function eat(){
        echo "I like bones";
    }
}

?>
