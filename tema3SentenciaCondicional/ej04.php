<?php

header('Content-Type: text/html; charset=utf-8');

$horas = $_POST["txtHoras"];
if ($horas <= 40) {
    $salario = $horas * 12;
} else if ($horas > 40) {
    $horasExtras = $horas - 40;
    $salario = 40 * 12 + $horasExtras * 16;
}
echo "El trabajador cobrará $salario € a la semana";
