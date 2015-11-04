<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ej04.php");
    exit;
}
?>
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
        <h2>Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
            nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
            número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
            en el cómputo. Utiliza sesiones.</h2>
        <?php
        $aImpares = & $_SESSION['impares'];
        $aPares = & $_SESSION['pares'];
        $contador = & $_SESSION['contador'];
        $numero = $_POST['numero'];

        if (!isset($aImpares)) {
            $aImpares = [];
        }
        if (!isset($aPares)) {
            $aPares = [];
        }
        if (!isset($contador)) {
            $contador = 0;
        }

        if ($numero >= 0) {
            ?>
            <form method="POST">
                <label>Introduzca números: (Negativo para finalizar)</label>
                <input type="number" name="numero" autofocus/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
        }

        if (isset($numero)) {
            if ($numero >= 0) {
                if ($numero % 2 == 0) {
                    array_push($aPares, $numero);
                } else {
                    array_push($aImpares, $numero);
                }
                $contador ++;
            } else {
                $mayorPar = max($aPares);
                $mediaImpares = array_sum($aImpares) / count($aImpares);

                echo "<p>Números introducidos: $contador</p>";
                echo "<p>Media de los impares: $mediaImpares</p>";
                echo "<p>Mayor de los pares: $mayorPar</p>";
            }
        }
        ?>
    </body>
</html>
