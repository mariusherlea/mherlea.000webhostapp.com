<?php

class Cars
{
    function greeting()
    {
    }

    function greeting2()
    {
    }

}

$the_methods = get_class_methods('Cars');

foreach ($the_methods as $value) {
    echo $value . "<br>";
}