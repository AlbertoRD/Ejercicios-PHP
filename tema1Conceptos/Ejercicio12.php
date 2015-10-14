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
        <style type="text/css">
            body{
                font-family: courier;
            }
        </style>
    </head>
    <body>
        <?php
        $altura = 5;
        for ($fila = 1, $espacios = 0, $asteriscos = ($altura*2)-1; $asteriscos >0; $espacios++, $asteriscos-=2, $fila++) {
            for ($i = 0; $i < $espacios; $i++) {
                echo "&nbsp;";
            }
            if ($fila == 1 || $fila == $altura) {
                for ($j = $asteriscos; $j != 0; $j--) {
                    echo "*";
                }
            } else {
                echo "*";
                for ($blancos = $asteriscos-2; $blancos != 0; $blancos--) {
                    echo "&nbsp;";
                }
                echo "*";
            }
            echo "<br/>";
        }
        ?>
    </body>
</html>
