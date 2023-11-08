<?php
class Dog{
    public $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function birthday(){
        $this->age = $age+1;
        echo $this->age;
    }

    static function woof(){
        echo "woof!";
    }
}

?>
