<?php

header('Content-Type: text/html; charset=utf-8');

$dia = $_POST['txtDia'];

if($dia == "Lunes" or $dia == "Miércoles"){
    echo "DWES";
}else if ($dia == "Martes" or $dia == "Jueves"){
    echo "DWEC";
}else if ($dia == "Viernes"){
    echo "DIW";
}else{
    echo "Ese dia no tenemos clase";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

