<?php

header('Content-Type: text/html; charset=utf-8');

$hora = intval($_POST['txtHora']);
$minutos = intval($_POST['txtMinutos']);

if ($hora != 0 or $minutos != 0) {
    
    $diaSeg = 24 * 60 * 60;
    $tiempo = $diaSeg - ($hora * 60 * 60 + $minutos * 60);
    echo "Quedan $tiempo segundos para que llegue la medianoche.";
} else {
    echo "Ya es medianoche.";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

