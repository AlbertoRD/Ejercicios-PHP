<?php

header('Content-Type: text/html; charset=utf-8');

$numero = $_POST['txtNumero'];
$par = ($numero % 2 == 0) ? true : false;
$divisible = ($numero % 5 == 0) ? true : false;
if ($par and $divisible) {
    echo "El numero $numero es par y es divisible entre 5.";
} else if ($par and ! $divisible) {
    echo "El numero $numero es par pero no es divisible entre 5.";
} else if (!$par and $divisible) {
    echo "El numero $numero no es par pero es divisible entre 5.";
} else if (!$par and ! $divisible) {
    echo "El numero $numero no es par ni es divisible entre 5.";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */