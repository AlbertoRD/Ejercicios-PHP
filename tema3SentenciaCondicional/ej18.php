<?php

header('Content-Type: text/html; charset=utf-8');

$numero = intval($_POST['txtNumero']);
$longitud = strlen(abs($numero));
echo "El número introducido tiene $longitud dígitos";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

