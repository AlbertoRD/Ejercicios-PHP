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
            body{
                font-family: courier;
            }
        </style>
    </head>
    <body>
        <h2>Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.</h2>
        <?php
        if (!isset($_POST['txtAltura'])) {
            ?>
            <form method="post">
                <label for="txtAltura">Altura:</label>
                <input type="number" id="txtAltura" name="txtAltura"/><br/>
                <label>Forma:</label>
                <input type="radio" name="forma" value="*"/><label>*</label>
                <input type="radio" name="forma" value="-"/><label>-</label>
                <input type="radio" name="forma" value="+"/><label>+</label>
                <input type="submit" value="Enviar"/> 
            </form> 
            <?php
        } else {
            $altura = $_POST['txtAltura'];
            $forma = $_POST['forma'];
            for ($fila = 1, $espacios = $altura - 1, $asteriscos = 1; $asteriscos <= ($altura * 2) - 1; $espacios--, $asteriscos+=2, $fila++) {
                for ($i = 0; $i < $espacios; $i++) {
                    echo "&nbsp;";
                }
                if ($fila == 1 || $fila == $altura) {
                    for ($j = $asteriscos; $j != 0; $j--) {
                        echo $forma;
                    }
                } else {
                    echo $forma;
                    for ($blancos = ($fila * 2) - 3; $blancos != 0; $blancos--) {
                        echo "&nbsp;";
                    }
                    echo $forma;
                }
                echo "<br/>";
            }
        }
        ?>
    </body>
</html>
