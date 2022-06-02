<?php

// callback functions are functins passed as arguments in another function
function getStringLength($items)
{
    return strlen($items);
}

$fruits = ["Apple", "Banana", "Oranges", "Avocado"];

$length = array_map("getStringLength", $fruits);

var_dump($length);


function  ask($str)
{
    return $str."?";
}

function exclaim($str)
{
    return $str."!";
}

function printFormatted($str, $format)
{
    return $format($str);
}

echo "<pre>";
var_dump(printFormatted("How are you", "ask"));
echo "</pre>";
var_dump(printFormatted("What was that", "exclaim"));
