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
        $altura = 5;
        for($espacios = $altura-1, $asteriscos=1; $asteriscos<=($altura*2)-1;$espacios--, $asteriscos+=2){
            for($i=0; $i<$espacios;$i++){
                echo "&nbsp;&nbsp;";
            }
            for($j=$asteriscos; $j!=0;$j--){
                echo "*";
            }
            echo "<br/>";
        }
        ?>
    </body>
</html>
