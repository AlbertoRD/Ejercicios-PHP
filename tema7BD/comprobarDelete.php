<?php

header('Content-Type: text/html; charset=utf-8');

try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}
$dni = $_POST['dni'];
if (isset($_POST['si'])) {
    $delete = "DELETE FROM cliente WHERE dni='" . $dni . "'";
    $conexion->exec($delete);
    echo "BAJA REALIZADA CON EXITO";
} else if (isset($_POST['no'])) {
    echo 'BAJA CANCELADA';
}
?>
<form method="post" action="ej01.php">
    <button type="submit">Volver</button>
</form>