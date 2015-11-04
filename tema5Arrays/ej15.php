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
            table td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h2>Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición
            en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener
            números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz
            resultado, ambas con los números convenientemente alineados.</h2>
        <?php
        $aMatriz = [];
        echo "Matriz original: <br/>";
        echo "<table>";
        for ($i = 0; $i < 12; $i++) {
            echo "<tr><th>$i</th>";
            for ($j = 0; $j < 12; $j++) {
                $aMatriz[$i][$j] = rand(0, 100);
                echo "<td>" . $aMatriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table><br/>";
        /* for ($i = 0; $i < 12; $i++) {
          if ($i == 0) {
          $valor = $aMatriz[0][$i];
          $aux = $valor; //39
          $valor = $ultValor; //37
          }else{
          $aMatriz[0][$i] = $aux;
          }
          } */



        echo "Matriz rotada: <br/>";
        echo "<table>";
        for ($i = 0; $i < 12; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 12; $j++) {
                echo "<td>" . $aMatriz[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table><br/>";
        ?>
    </body>
</html>
