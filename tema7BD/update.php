<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL ^ E_NOTICE);

try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}
$dni = $_POST['dni'];

$consulta = $conexion->query("SELECT * FROM cliente WHERE dni=" . $dni);
if ($consulta->rowCount() > 0) {
    echo "Edita el cliente con DNI $dni:";
    while ($cliente = $consulta->fetchObject()) {
        ?>
        <form method="post" action="ejecutarUpdate.php">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" value="<?= $cliente->nombre ?>" name="txtNombre"/></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type="text" value="<?= $cliente->direccion ?>" name="txtDireccion"/></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input type="text" value="<?= $cliente->telefono ?>" name="txtTelefono"/></td>
                </tr>
            </table>
            <input type="hidden" value="<?= $dni?>" name="dni"/>
            <button type="submit">Modificar</button>
        </form>
        <?php
    }
} else {
    echo "No existe un cliente con DNI " . $_POST['dni'];
    ?>
    <form method="post" action="ej01.php">
        <button type="submit">Volver</button>
    </form>
    <?php
}