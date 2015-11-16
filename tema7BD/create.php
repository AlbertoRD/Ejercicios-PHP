<?php
header('Content-Type: text/html; charset=utf-8');
try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}
$dni = $_POST['dni'];

$consulta = $conexion->query("SELECT dni FROM cliente WHERE dni='" . $dni . "'");
if ($consulta->rowCount() > 0) {
    echo "Ya existe un cliente con DNI " . $_POST['dni'];
} else {
    $create = "INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES ('$_POST[dni]','$_POST[nombre]','$_POST[direccion]','$_POST[telefono]')";
    $conexion->exec($create);
    echo "ALTA REALIZADA CON EXITO";
}
?>

<form method="post" action="ej01.php">
    <button type="submit">Volver</button>
</form>