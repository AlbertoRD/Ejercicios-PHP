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
        <?php
        include_once './Vehiculo.php';
        include_once './Bicicleta.php';
        include_once './Coche.php';

        $bicicleta = new Bicicleta();
        $coche = new Coche();

        $bicicleta->anda(20);
        echo "He recorrido con la bicicleta " . $bicicleta->getKmRecorridos() . " km.<br/>";
        echo $bicicleta->hacerCaballito() . "<br/>";
        $coche->anda(30);
        echo "He recorrido con el coche " . $coche->getKmRecorridos() . " km.<br/>";
        echo $coche->quemarRueda() . "<br/>";
        ?>
    </body>
</html>
