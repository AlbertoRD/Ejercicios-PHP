<?php

header('Content-Type: text/html; charset=utf-8');

$altura = intval($_POST['txtAltura']);
$g = 9.81;
$tiempo = sqrt((2*$altura)/$g);

echo "El tiempo que tardará en caer al suelo será de $tiempo segundos";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

