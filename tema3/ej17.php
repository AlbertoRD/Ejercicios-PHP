<?php

header('Content-Type: text/html; charset=utf-8');

$numero = intval($_POST['txtNumero']);
$longitud = strlen($numero);
$primera = intval($numero / pow(10, $longitud - 1));
echo "La primera cifra del número introducido es $primera";
