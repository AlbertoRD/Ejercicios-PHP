<?php

header('Content-Type: text/html; charset=utf-8');

$numero =  intval($_POST['txtNumero']);
$ultimo = $numero%10;
echo "La última cifra de este numero es un $ultimo .";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

