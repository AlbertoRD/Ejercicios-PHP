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
        <?php
        $altura = 5;
        for ($fila = 1, $espacios = $altura - 1, $asteriscos = 1; $asteriscos <= ($altura * 2) - 1; $espacios--, $asteriscos+=2, $fila++) {
            for ($i = 0; $i < $espacios; $i++) {
                echo "&nbsp;&nbsp;";
            }
            if ($fila == 1 || $fila == $altura) {
                for ($j = $asteriscos; $j != 0; $j--) {
                    echo "*";
                }
            } else {
                echo "*";
                for ($blancos = ($fila * 2) - 3; $blancos != 0; $blancos--) {
                    echo "&nbsp;&nbsp;";
                }
                echo "*";
            }
            echo "<br/>";
        }
        ?>
    </body>
</html>
