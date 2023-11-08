<?php
include_once 'Cat.php';
include_once 'Dog.php';

// $Mincis = new Cat();
// $Brincis = new Cat();

// $Mincis->birthday();
// $Brincis->birthday();

// Cat::moew();

$Dog = new Dog("Reksis", 6);
$Cat = new Cat("Kakis", 5);

echo "<br>";

Dog::eat();
echo "<br>";

Cat::eat();
echo "<br>";
?>