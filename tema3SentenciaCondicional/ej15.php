<?php

header('Content-Type: text/html; charset=utf-8');
$resultado = 0;
foreach ($_POST as $valor) {
    if ($valor == "true") {
        $resultado+= 3;
    }
}
echo "Tu resultado es: $resultado <br/>";
if ($resultado >= 0 and $resultado <= 10) {
    echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
} else if ($resultado >= 11 and $resultado <= 22) {
    echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
} else if ($resultado >= 23 and $resultado <= 30) {
    echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

