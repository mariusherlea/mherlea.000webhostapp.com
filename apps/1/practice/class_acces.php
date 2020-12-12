<?php

class Cars
{

    public $wheels_count = 4;
    private $doors_count = 4;
    protected $glass_count = 4;

    function car_detail()
    {
        echo '<br>'.'This car has ' . $this->wheels_count.' wheels, and '. $this->doors_count.' doors ' . $this->glass_count . ' glass.';
    }


}

$dacia = new Cars();

$dacia->car_detail();
