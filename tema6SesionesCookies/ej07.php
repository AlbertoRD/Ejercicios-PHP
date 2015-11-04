<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ej04.php");
    exit;
}
?>
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
        </style>
    </head>
    <?php
    if (!isset($_COOKIE['color'])) {
        $color = "#ffffff";
        setcookie("color", $color);
    } else {
        if (isset($_POST['color'])) {
            $color = $_POST['color'];
            setcookie("color", $color);
        } else if (isset($_COOKIE['color'])) {
            $color = $_COOKIE['color'];
        }
    }
    ?>
    <body style="background-color:<?= $color ?> ">
        <h2>Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de
            una página. Esta página debe tener únicamente algo de texto y un formulario para cambiar el color.</h2>
        <form method="post">
            <input type="color" name="color" value="<?= $color ?>"/>
            <input type="submit" value="Cambiar"/>
        </form>
    </body>
</html>