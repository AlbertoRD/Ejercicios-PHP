<?php

header('Content-Type: text/html; charset=utf-8');

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$resultado = $num1 * $num2;
echo "$num1 x $num2 = $resultado";

