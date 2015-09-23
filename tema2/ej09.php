<?php

header('Content-Type: text/html; charset=utf-8');

$radio = $_POST['txtRadio'];
$altura = $_POST['txtAltura'];

$volumen = (1 / 3) * M_PI * pow($radio, 2) * $altura;
$volumen = round($volumen, 4);
echo "El volumen del cono es de $volumen";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

