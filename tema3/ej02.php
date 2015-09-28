<?php

header('Content-Type: text/html; charset=utf-8');

$hora = intval($_POST['txtHora']);
 
if($hora>=6 && $hora<=12){
    echo 'Buenos dias!';
}else if($hora>=13 && $hora<=20){
    echo 'Buenas tardes!';
}else if(($hora>=21&&$hora<=23)|| ($hora>=0&& $hora<=5)){
    echo 'Buenas noches!';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

