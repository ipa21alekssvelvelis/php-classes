<?php

abstract class Animal{
    public $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    abstract static function eat();
}

?>