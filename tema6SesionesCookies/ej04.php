<?php
/* Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
  programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
  con un nombre de usuario y contraseña correctos. */
session_start();

header('Content-Type: text/html; charset=utf-8');

$usuario = "usuario";
$contraseña = "1234";

if ($_POST['txtUsuario'] == $usuario and $_POST['txtPass'] == $contraseña) {
    $_SESSION['usuario'] = $usuario;
}
if (!isset($_SESSION['usuario'])) {
    ?>
    <form method="post">
        <label for="txtUsuario">Usuario:</label>
        <input type="text" name="txtUsuario" autofocus/>
        <label for="txtPass">Contraseña:</label>
        <input type="password" name="txtPass"/>
        <input type="submit" value="Entrar"/>
    </form>
    <?php
    if (isset($_POST['txtUsuario']) and ( $_POST['txtUsuario'] != $usuario or $_POST['txtPass'] != $contraseña)) {
        echo "Usuario o contraseña incorrectas.";
    }
} else {
    $directory = "Ejercicios-PHP/tema6SesionesCookies/";
    $phpfiles = glob("/var/www/html/" . $directory . "*ej*.php");
    foreach ($phpfiles as $phpfile) {
        echo "<p><a href=" . basename($phpfile) . ">" . basename($phpfile) . " </a></p>";
    }
}