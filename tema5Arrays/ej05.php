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
            div{
                height: 20px;
                background-color: red;
                color: white;
            }
        </style>
    </head>
    <body>
        <h2>Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
            año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
            del diagrama se pueden dibujar a base de la concatenación de una imagen.</h2>
        <?php
        $aMes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        if (!isset($_POST['temperatura'])) {
            $mes = -1;
            $valores = "";
        } else {
            $temperatura = $_POST['temperatura'];
            $mes = $_POST['mes'];
            $valores = $_POST['valores'];
            $valores = ($valores == "") ? $temperatura : $valores . "," . $temperatura;
        }
        if (!isset($_POST['temperatura']) || $mes < 11) {
            $mes++;
            ?>
            <form method="post">
                <p>Introduzca las temperaturas medias de cada mes:</p>
                <label><?= $aMes[$mes] ?></label>
                <input type="number" name="temperatura" autofocus/>
                <input type="hidden" name="mes" value="<?= $mes ?>"/>
                <input type="hidden" name="valores" value="<?= $valores ?>"/>
            </form>
            <?php
        } else {
            $aTemperaturas = explode(",", $valores);
            for ($i = 0; $i < count($aMes); $i++) {
                echo "$aMes[$i] <div style='width: $aTemperaturas[$i]px'></div><br/>";
            }
        }
        ?>
    </body>
</html>
