<?php session_start(); ?>
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
        <h2>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
            teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
            terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.</h2>
        <?php
        $valores = & $_SESSION['valores'];
        $contador = & $_SESSION['contador'];
        if (!isset($valores)) {
            $valores = 0;
            $contador = 0;
        }
        if ($_POST['numero'] >= 0) {
            ?>
            <form method="POST">
                <label>Introduzca números para calcular la media: (Negativo para finalizar)</label>
                <input type="number" name="numero" autofocus/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
        }

        if (isset($valores) and isset($_POST['numero'])) {
            if ($_POST['numero'] >= 0) {
                $valores += $_POST['numero'];
                $contador ++;
            } else {
                $media = $valores / $contador;
                echo "La media de los números introducidos es $media";
                session_destroy();
            }
        }
        ?>
    </body>
</html>
