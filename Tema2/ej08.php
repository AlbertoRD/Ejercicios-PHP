<?php

header('Content-Type: text/html; charset=utf-8');

$horas = $_POST["txtHoras"];

$salario = $horas * 12;
echo "El trabajador cobrará $salario € a la semana";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

