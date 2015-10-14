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
        <h2>Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
            junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.</h2>
        <?php
        $numero = $_POST['txtNumero'];

        if (!isset($numero)) {
            $contador = 1;
            $aNumeros = "";
        } else {
            $contador = $_POST['txtContador'];
            $aNumeros = $_POST['aNumeros'];
        }
        if ($contador < 10) {
            $contador = $_POST['txtContador'];
            $aNumeros = $_POST['aNumeros'];

            if ($aNumeros == "") {
                $aNumeros = $numero;
            } else {
                $aNumeros .= "," . $numero;
            }
            $contador++;
        }
        if ($contador < 10 || (!isset($numero))) {
            ?>
            <form method="post">
                <label>Introduzca 10 números por teclado:</label><br/>
                <input type="number" name="txtNumero" autofocus/>
                <input type="hidden" name="txtContador" value="<?= $contador ?>"/>
                <input type="hidden" name="aNumeros" value="<?= $aNumeros ?>"/>
            </form><?php
        }else{
            if($contador == 10){
                $numero = explode(",", $aNumeros);
                $max = max($numero);
                $min = min($numero);
                
                
                foreach ($numero as $n){
                    if($n<$min){
                        $min = $n;
                    }
                    if ($n>$max){
                        $max = $n;
                    }
                }
                foreach ($numero as $n){
                    echo "$n<br/>";
                }
                echo "maximo = $max , minimo = $min";
            }
        }
        ?>
    </body>
</html>
