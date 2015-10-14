<?php

header('Content-Type: text/html; charset=utf-8');

$a = $_POST['numA'];
$b = $_POST['numB'];

$x = ($b*(-1))/$a;
echo $a."x + ". $b." = 0 <br/>";
echo "X = $x";