<?php

class Cars
{

    public $wheels_count = 4;
    static $door_count = 2;

    function __construct()
    {
//        echo $this->wheels_count;
        echo self::$door_count++ ;
    }

        function __detruct()
        {
            echo self::$door_count-- ;
        }

    /* function details()
     {
         echo $this->wheels_count;
     }*/
}

$dacia = new Cars();
$bmw=new Cars();
$merc =new Cars();
$lada=new Cars();



