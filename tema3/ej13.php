<?php

header('Content-Type: text/html; charset=utf-8');
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

if ($num1 <= $num2 and $num1 <= $num3) {
    if ($num2 <= $num3) {
        echo "$num1 < $num2 < $num3";
    } else {
        echo "$num1 < $num3 < $num2";
    }
} else if ($num2 <= $num1 and $num2 <= $num3) {
    if ($num1 <= $num3) {
        echo "$num2 < $num1 < $num3";
    } else {
        echo "$num2 < $num3 < $num1";
    }
} else if ($num3 <= $num1 and $num3 <= $num2) {
    if ($num1 <= $num2) {
        echo "$num3 < $num1 < $num2";
    } else {
        echo "$num3 < $num2 < $num1";
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

