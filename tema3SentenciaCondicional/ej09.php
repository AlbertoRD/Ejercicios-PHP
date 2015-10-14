<?php

header('Content-Type: text/html; charset=utf-8');

$a = intval($_POST['numeroA']);
$b = intval($_POST['numeroB']);
$c = intval($_POST['numeroC']);

$resultadoPos = ($b * (-1) + sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
$resultadoNeg = ($b * (-1) - sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);

if (is_nan($resultadoNeg) or is_nan($resultadoPos)) {
    echo 'Resultado imposible';
} else {
    echo "x = $resultadoPos <br/>";
    echo "x = $resultadoNeg";
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

