<?php
include "./AbstractClass/Animal.php";

class Chicken extends Animal{
    public function makeSound()
    {
        return "Chicken: cluck-cluck";
    }
    public function howToEat()
    {
        return "could be fried";
    }

}