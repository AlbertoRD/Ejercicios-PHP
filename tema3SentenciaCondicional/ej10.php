<?php

header('Content-Type: text/html; charset=utf-8');

$dia = $_POST['txtDia'];
$mes = $_POST['txtMes'];

if(($dia>=21 and $mes == "Marzo")or ($dia<=20 and $mes == "Abril")){
    echo 'Aries';
}else if(($dia>=21 and $mes == "Abril")or ($dia<=20 and $mes == "Mayo")){
    echo "Tauro";
}else if(($dia>=21 and $mes == "Mayo")or ($dia<=20 and $mes == "Junio")){
    echo "Géminis";
}else if(($dia>=21 and $mes == "Junio")or ($dia<=20 and $mes == "Julio")){
    echo 'Cáncer';
}else if(($dia>=21 and $mes == "Julio")or ($dia<=21 and $mes == "Agosto")){
    echo "Leo";
}else if(($dia>=22 and $mes == "Agosto")or ($dia<=22 and $mes == "Septiembre")){
    echo "Virgo";
}else if(($dia>=23 and $mes == "Septiembre")or ($dia<=22 and $mes == "Octubre")){
    echo 'Libra';
}else if(($dia>=23 and $mes == "Octubre")or ($dia<=22 and $mes == "Noviembre")){
    echo 'Escorpio';
}else if(($dia>=23 and $mes == "Noviembre")or ($dia<=20 and $mes == "Diciembre")){
    echo 'Sagitario';
}else if(($dia>=21 and $mes == "Diciembre")or ($dia<=19 and $mes == "Enero")){
    echo 'Capricornio';
}else if(($dia>=20 and $mes == "Enero")or ($dia<=18 and $mes == "Febrero")){
    echo 'Acuario';
}else if(($dia>=19 and $mes == "Febrero")or ($dia<=20 and $mes == "Marzo")){
    echo 'Piscis';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

