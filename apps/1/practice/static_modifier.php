<?php

class Cars
{

    private $wheels_count = 4;


    function car_detail()
    {
        echo '<br>'.'This car has ' . Cars::$wheels_count.' wheels, and '. Cars:: $doors_count.' doors ' . Cars::$glass_count . ' glass.';
    }


}

/*$dacia = new Cars();
echo Cars::$glass_count;
$test =  Cars::$glass_count=5;
echo $test;*/

Cars::car_detail();