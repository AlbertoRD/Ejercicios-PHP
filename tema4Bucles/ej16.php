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
        <h2>Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
            primo es aquel que sólo es divisible entre él mismo y la unidad.</h2>
        <?php
        if (!isset($_POST['txtNum'])) {
            ?>
            <form method="post">
                <input type="number" name="txtNum"/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
        } else {
            $numero = intval($_POST['txtNum']);
            $divisores = 0;
            for ($i = 1; $i <= $numero; $i++) {
                if ($numero % $i == 0)
                    $divisores++;
            }
            echo ($divisores == 2) ? "El número $numero es primo" : "El número $numero no es primo";
        }
        ?>
    </body>
</html>
