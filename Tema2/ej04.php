<?php

header('Content-Type: text/html; charset=utf-8');

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['selOperacion'];

switch ($operacion){
    case "s":
        $suma =  $num1+$num2;
        echo "$num1 + $num2 = $suma";
        break;
    case "r":
        $resta = $num1-$num2;
        echo "$num1 - $num2 = $resta";
        break;
    case "m":
        $mult = $num1*$num2;
        echo "$num1 x $num2 = $mult";
        break;
    case "d":
        $division = $num1/$num2;
        echo "$num1 / $num2 = $division";
        break;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

