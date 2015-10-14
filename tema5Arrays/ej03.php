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
        <h2>Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
            elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
            la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
            muestra el contenido del array.</h2>
        <?php
        if (!isset($_POST['numero'])) {
            $contador = 0;
            $valores = "";
        } else {
            $numero = $_POST['numero'];
            $contador = $_POST['contador'];
            $valores = $_POST['valores'];

            $valores = ($valores == "") ? $numero : $valores . "," . $numero;
        }

        if (!isset($_POST['numero']) || $contador < 15) {
            $contador++;
            ?>
            <form method="post">
                <p>Introduzca 15 números:</p>
                <input type="number" name="numero" autofocus/>
                <input type="hidden" name="contador" value="<?= $contador ?>"/>
                <input type="hidden" name="valores" value="<?= $valores ?>"/>
            </form>
            <?php
        } else {
            $aValores = explode(",", $valores);

            echo "Array original:<br>";

            echo "<table><tr>";

            foreach ($aValores as $valor) {
                echo "<td>$valor</td>";
            }
            echo "</tr></table><br/>";
            $aux = $aValores[count($aValores) - 1];

            for ($i = count($aValores) - 1; $i > 0; $i--) {
                $aValores[$i] = $aValores[$i - 1];
            }
            $aValores[0] = $aux;

            echo "Array Rotado:<br/>"
            . "<table><tr>";
            foreach ($aValores as $valor) {
                echo "<td>$valor</td>";
            }
        }
        ?>
    </body>
</html>
