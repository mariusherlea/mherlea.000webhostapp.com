<?php

class Cars
{

    var $wheels_count = 4;
    var $doors_count = 4;

    function car_detail()
    {
        echo '<br>'.'This car has ' . $this->wheels_count.' wheels, and '. $this->doors_count.' doors.<br>';
    }


}

$dacia = new Cars();
$bmw=new Cars();

 $dacia->wheels_count = 10;
// $dacia->doors_count=2;

$dacia->car_detail();

$bmw->wheels_count = 6;
$bmw->doors_count = 3;
$bmw->car_detail();