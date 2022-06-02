<?php
abstract class Car
{
    public $name;

    public function __construct($name)
    {
         $this->name = $name;
    }

    abstract public function intro() : string;
}

// child classes

class Audi extends Car
{
    public function intro() : string 
    {
        return "Choose German quality. I am  a $this->name";
    }
}

class Volvo extends Car
{
    public function intro() : string
    {
        return "Proud to be swedish!. I am $this->name";
    }
}

class Citroen extends Car
{
    public function intro(): string
    {
        return "French extravagance. I am a $this->name";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new Citroen("Citroen");
echo $citroen->intro();