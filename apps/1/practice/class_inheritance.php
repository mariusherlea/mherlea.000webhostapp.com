<?php

class Cars
{
    var $wheels = 4;

    function greeting()
    {
        echo 'Hello';
    }


}

$bmw = new Cars();

class Trucks extends Cars
{
var $wheels=10;
}

$volvo = new Trucks();

echo  $volvo->wheels;
$volvo->greeting();