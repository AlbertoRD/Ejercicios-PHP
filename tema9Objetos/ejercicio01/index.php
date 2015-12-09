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
        include_once './DadoPoker.php';
        lanzarCubilete();

        function lanzarCubilete() {
            for ($i = 0; $i < 5; $i++) {
                $dado = new DadoPoker();
                $dado->tira();
                echo $dado . "<br/>";
            }

            echo "Dados Lanzados: " . $dado->getTiradasTotales() . "<br/>";
        }
        ?>
    </body>
</html>
