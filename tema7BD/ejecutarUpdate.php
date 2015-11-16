<?php

header('Content-Type: text/html; charset=utf-8');

try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}

$update = "UPDATE cliente SET nombre='" . $_POST['txtNombre'] . "',direccion='" . $_POST['txtDireccion'] . "',telefono='" . $_POST['txtTelefono'] . "'"
        . "WHERE dni='" . $_POST['dni'] . "' ";
$conexion->exec($update);
echo "MODIFICACION REALIZADA CON EXITO";
?>
<form method="post" action="ej01.php">
    <button type="submit">Volver</button>
</form>
