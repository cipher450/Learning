<?php

$a=150;
$b=20;
/*
if ($a > $b){
    echo $a . " is greater than " . $b;
}else{
    echo $a . " is not greater than " . $b;
}
*/
$color = "blue";

switch ($color){
    default:
    echo 'default triggerd';
    break;
    case "red":
    echo "The color is " . $color;
    case "blue":
    echo "The color is " . $color;

}

