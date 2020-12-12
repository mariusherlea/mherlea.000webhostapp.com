<?php

class Cars
{


}

$my_clases = get_declared_classes();

foreach ($my_clases as $clase) {
    echo $clase . "<br>";
}