<?php

header('Content-Type: text/html; charset=utf-8');

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2+ $nota3)/count($_POST);
echo "La media de las notas es $media . <br/>";

 if ($media <5){
     echo 'INSUFICIENTE';
 }else if ($media <6){
     echo "SUFICIENTE";
 }else if($media <7){
     echo "BIEN";
 }else if ($media >= 7 and $media <9){
     echo "NOTABLE";
 }else if ($media >= 9 and $media <= 10){
     echo "SOBRESALIENTE";
 }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

