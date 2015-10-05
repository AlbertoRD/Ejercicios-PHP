<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la
            suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
            el contador de los números introducidos y la media.</h2>
        <?php
        $contador = (!isset($_POST['contador'])) ? 0 : $_POST['contador'];
        $valor = (!isset($_POST['valor'])) ? 0 : $_POST['valor'];

        $valor += $_POST['txtNumero'];
        if ($valor < 10000) {
            $contador++;
            ?>
            <form method = "post" action = "ej23.php">
                <input type = "number" name = "txtNumero"/>
                <input type = "submit" value = "Enviar"/>
                <input type = "hidden" value = "<?= $contador ?>" name = "contador"/>
                <input type = "hidden" value = "<?= $valor ?>" name = "valor"/>
            </form>
            <?php
        } else {
            $media = $valor / $contador;
            echo "Valor total acumulado es $valor <br/>";
            echo "Numero número introducidos es $contador <br/>";
            echo "La media es $media <br/>";
        }
        ?>
    </body>
</html>

