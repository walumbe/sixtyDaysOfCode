<?php

use Fruit as GlobalFruit;

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function intro()
    {
        echo "This fruit is {$this->name} and its color is {$this->color}";
    }

    const BRENDY = "The p was cool";
    public function displayConstants()
    {
        return self::BRENDY;
    }
}

// $fruit = new Fruit("Apple","Green");

// echo $fruit->getName();
// echo $fruit->getColor();
 

class Strawberry extends GlobalFruit
{
    public function message()
    {
        echo "Am i a fruit or a berry?";
    }
}

$berry = new Strawberry("Strawberry", "red");
echo $berry->message();
echo $berry->intro();

echo $berry->displayConstants();
?>