<?php

abstract class Animal{
    public $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function birthday(){
        $this->age = $age+1;
        echo $this->age;
    }

    abstract static function eat();
}

?>