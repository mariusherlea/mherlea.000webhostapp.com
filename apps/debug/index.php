<?php

$names=array("Herlea","Ion", "Marius");
$numberOfName=0;
foreach ($names as $name){
    $numberOfName++;
    $stringToEcho=sayHello($name);
    echo $stringToEcho;
}
 echo "Echoed $numberOfName names \n";

function sayHello($name){
    echo "Hello $name \n";
}