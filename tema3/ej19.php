<?php

header('Content-Type: text/html; charset=utf-8');

$numero = $_POST['txtNumero'];

//falta terminar capicuo
$capicuo = false;
for ($i = 0; $i < strlen($numero); $i++) {
    for ($j = strlen($numero) - 1; $j >= 0; $j--) {
        if($numero[$i] != $numero[$j]){
            $capicuo = false;
        }
    }
}