<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
            un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
            array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
            si es necesario.</h2>
        <?php
        $aNumeros = [];
        $aPares = [];
        $aImpares = [];

        for ($i = 0; $i < 20; $i++) {
            $aNumeros[$i] = rand(0, 100);
        }
        echo "Array Original: <br/>";
        for ($i = 0; $i < count($aNumeros); $i++) {
            echo "$aNumeros[$i] ";
            if ($aNumeros[$i] % 2 == 0) {
                array_push($aPares, $aNumeros[$i]);
            } else if ($aNumeros[$i] % 2 != 0) {
                array_push($aImpares, $aNumeros[$i]);
            }
        }
        echo "<br/>";
        $aNumeros = [];
        echo "Array Cambiado: <br/>";
        foreach ($aPares as $v) {
            array_push($aNumeros, $v);
        }
        foreach ($aImpares as $v) {
            array_push($aNumeros, $v);
        }
        foreach ($aNumeros as $n) {
            echo "$n ";
        }
        ?>
    </body>
</html>
