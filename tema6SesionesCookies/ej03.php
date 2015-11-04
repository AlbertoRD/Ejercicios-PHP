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
        <h2>Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
            su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
            el contador de los números introducidos y la media. Utiliza sesiones.</h2>
        <?php
        $valor = & $_SESSION['valor'];
        $contador = & $_SESSION['contador'];
        $numero = $_POST['numero'];

        if (!isset($valor)) {
            $valor = 0;
        }
        if (!isset($contador)) {
            $contador = 0;
        }

        if (isset($numero)) {
            //if (($valor + $numero) <= 10000) {
            $valor += $numero;
            $contador++;
            // } else {
            if ($valor >= 10000) {
                $media = $valor / $contador;

                echo "<p>Total Acumulado: $valor</p>";
                echo "<p>Contador: $contador</p>";
                echo "<p>Media: $media</p>";
            }
        }

        if ($valor <= 10000) {
            ?>
            <form method="POST">
                <label>Introduzca números:</label>
                <input type="number" name="numero" autofocus/>
                <input type="submit" value="Enviar"/>
            </form>        
            <?php
        }
        ?>
    </body>
</html>
