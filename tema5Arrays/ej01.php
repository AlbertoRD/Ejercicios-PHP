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
        <style>
            .tabla{
                display: table;
            }
            .fila{
                display: table-row;
            }
            .celda{
                width: 100px;
                display: table-cell;
            }
        </style>
    </head>
    <body>
        <h2>Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
            Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
            almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
            almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
            los tres arrays dispuesto en tres columnas.</h2>
        <?php
        $numero = new SplFixedArray(20);
        $cuadrado = new SplFixedArray(20);
        $cubo = new SplFixedArray(20);

        for ($i = 0; $i < count($numero); $i++) {
            $numero[$i] = rand(0, 100);
        }
        for ($i = 0; $i < count($cuadrado); $i++) {
            $cuadrado[$i] = pow($numero[$i], 2);
        }
        for ($i = 0; $i < count($cubo); $i++) {
            $cubo[$i] = pow($numero[$i], 3);
        }
        ?>
        <div class="tabla">
            <?php
            for ($i = 0; $i < count($numero); $i++) {
                echo "<div class='fila'><div class='celda'>$numero[$i]</div>"
                . "<div class='celda'> $cuadrado[$i]</div>"
                . "<div class='celda'> $cubo[$i]</div> </div>";
            }
            ?>
        </div>

    </body>
</html>
