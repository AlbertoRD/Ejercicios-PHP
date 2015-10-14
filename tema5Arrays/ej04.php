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
            .rojo{
                color: red;
            }
        </style>
    </head>
    <body>
        <h2>
            Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
            separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
            cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
            Los números que se han cambiado deben aparecer resaltados de un color diferente.
        </h2>
        <?php
        if (!isset($_POST['numero'])) {
            $valores = "";
            for ($i = 0; $i < 100; $i++) {
                $num = rand(0, 20);
                $valores .=$num . " ";
            }
            $valores = trim($valores);
        } else {
            $valores = $_POST['array'];
        }
        echo "Array original:<br>";
        echo $valores . "<br/>";

        if (!isset($_POST['numero'])) {
            ?>
            <form method="post">
                Introduzca un número y su sustitución:
                <input type="number" name="numero"/>
                <input type="number" name="valor"/>
                <input type="hidden" name="array" value="<?= $valores ?>"/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
        } else {
            $num = $_POST['numero'];
            $valor = $_POST['valor'];
            $aValores = explode(" ", $valores);
            echo "Array cambiado:<br/>";
            foreach ($aValores as $val) {
                if ($num == $val) {
                    $val = $valor;
                    echo "<span class='rojo'>$val</span> ";
                } else {
                    echo $val . " ";
                }
            }
        }
        ?>
    </body>
</html>
