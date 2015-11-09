<?php session_start() ?>
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
            .table{
                display: table;
            }
            .row{
                display: table-row;
            }
            .cell{
                display: table-cell;
            }
        </style>
    </head>
    <body>
        <?php
        $aPalabras = [ "Blanco", "Amarillo", "Rojo", "Verde", "Azul", "Negro"];
        $aTraducciones = ["White", "Yellow", "Red", "Green", "Blue", "Black"];
        $cookie = & $_COOKIE['palabras'];
        $aciertos = 0;
        $fallos = 0;
        if (!isset($cookie)) {
            setcookie("palabras", implode(",", $aPalabras), time() + 24 * 3600);
            setcookie("traducciones", implode(",", $aTraducciones), time() + 24 * 3600);
        }
        if (isset($_POST)) {
            foreach ($_POST as $palabra => $traduccion) {
                if ($traduccion == $aPalabras[array_search($palabra, $aTraducciones)]) {
                    $aciertos++;
                } else {
                    $fallos++;
                }
            }
        }
        ?>

        <form method="post">
            <div class="table">
                <?php foreach ($aTraducciones as $palabra) { ?>
                    <div class="row">
                        <div class="cell" ><label><?= $palabra ?>: </label></div>
                        <div class="cell" ><input type="text" name="<?= $palabra ?>"/></div><br/>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="cell"><button type="submit">Enviar</button></div>
                </div>
            </div>
        </form>
        <div id="puntuacion">
            <p>Aciertos: <?= $aciertos ?></p>
            <p>Fallos: <?= $fallos ?></p>
        </div>
    </body>
</html>
