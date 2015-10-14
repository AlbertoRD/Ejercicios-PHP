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
            terminado de introducir los datos cuando meta un número negativo.</h2>
        <?php
        $total = (!isset($_POST['total'])) ? 0 : $_POST['total'];
        $contador = (!isset($_POST['contador'])) ? -1 : $_POST['contador'];
        $numero = (!isset($_POST['txtNumero'])) ? 0 : $_POST['txtNumero'];
        if ($numero >= 0) {
            $contador++;
            $total +=$numero;
            var_dump($contador);
            ?>
            <form method="post">
                <input type="number" name="txtNumero"/>
                <input type="submit" value="Enviar"/>
                <input type="hidden" name="total" value="<?= $total ?>"/>
                <input type="hidden" name="contador" value="<?= $contador ?>"/>
            </form>
            <?php
        } else {
            $media = $total / $contador;
            echo "La media es $media";
        }
        ?>

    </body>
</html>
