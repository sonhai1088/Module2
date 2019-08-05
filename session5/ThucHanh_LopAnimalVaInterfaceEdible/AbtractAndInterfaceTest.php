<?php

include_once 'Animals/Chicken.php';
include_once 'Animals/Tiger.php';

echo ('---- Animals');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal){
    echo $animal->makeSound().' ';
    if ($animal instanceof Chicken){
        echo $animal->howToEat().' ';
    }
}
