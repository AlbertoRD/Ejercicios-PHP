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
        $pesetas = 500;
        $euros = $pesetas / 166.386;
        $resultado = number_format($euros, 2);
        echo "$pesetas pesetas = $resultado €";
        ?>
    </body>
</html>
