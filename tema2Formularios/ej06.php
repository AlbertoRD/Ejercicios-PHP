<?php

header('Content-Type: text/html; charset=utf-8');

$base = $_POST["txtBase"];
$altura = $_POST["txtAltura"];

$area = ($base*$altura)/2;
echo "El area del triángulo es de $area";
