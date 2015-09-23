<?php

header('Content-Type: text/html; charset=utf-8');

$base = $_POST["txtBase"];
$altura = $_POST["txtAltura"];

$area = $base*$altura;
echo "El area del rectángulo es de $area";
