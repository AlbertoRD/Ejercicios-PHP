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
            .par{
                color: red;
            }
            .impar{
                color: blue;
            }
        </style>
    </head>
    <body>
        <h2>Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
            pares de un color y los impares de otro.</h2>

        <?php
        if (!isset($_POST['txtNumero'])) {
            $valores = "";
            $contador = 0;
        } else {
            $numero = $_POST['txtNumero'];
            $contador = $_POST['contador'];
            $valores = $_POST['valores'];

            $valores = ($valores == "") ? $numero : $valores . "," . $numero;
        }
        if (!isset($_POST['txtNumero']) || $contador < 8) {
            $contador++;
            ?>
            <form method="post">
                <p>Introduzca 8 números:</p>
                <input type="number" name="txtNumero" autofocus/>
                <input type="submit" value="Enviar"/>
                <input type="hidden" name="valores" value="<?= $valores ?>"/>
                <input type="hidden" name="contador" value="<?= $contador ?>"/>
            </form>
            <?php
        } else {
            $aValores = explode(",", $valores);

            foreach ($aValores as $v) {
                echo ($v % 2 == 0) ? "<span class='par'>$v</span> " : "<span class='impar'>$v</span> ";
            }
        }
        ?>
    </body>
</html>
