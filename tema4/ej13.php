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
        <h2>Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos
            son negativos.</h2>
        <?php
        $positivos = 0;
        $negativos = 0;
        if (!isset($_POST['txtNum1'])) {
            ?>
            <form method="post">
                <input type="number" name="txtNum1" value="0"/><br/>
                <input type="number" name="txtNum2" value="0"/><br/>
                <input type="number" name="txtNum3"value="0"/><br/>
                <input type="number" name="txtNum4"value="0"/><br/>
                <input type="number" name="txtNum5"value="0"/><br/>
                <input type="number" name="txtNum6"value="0"/><br/>
                <input type="number" name="txtNum7"value="0"/><br/>
                <input type="number" name="txtNum8"value="0"/><br/>
                <input type="number" name="txtNum9"value="0"/><br/>
                <input type="number" name="txtNum10"value="0"/><br/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
        } else {
            for ($i = 1; $i <= 10; $i++) {
                if (intval($_POST['txtNum' . $i]) >= 0) {
                    $positivos++;
                } else {
                    $negativos++;
                }
            }
            echo "$positivos positivos <br/>";
            echo "$negativos negativos";
        }
        ?>
    </body>
</html>
