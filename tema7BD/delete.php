<?php
header('Content-Type: text/html; charset=utf-8');
$dni = $_POST['dniBorrar'];
try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}
$consulta = $conexion->query("SELECT dni FROM cliente WHERE dni='" . $dni . "'");
if ($consulta->rowCount() == 0) {
    echo "No existe un cliente con DNI " . $_POST['dniBorrar'];
} else {
    ?>  
    <form method="post" action="comprobarDelete.php">
        <p>¿Eliminar cliente con DNI <?= $_POST['dniBorrar'] ?></p>
        <input type="submit" value="si" name="si"/>
        <input type="submit" value="no" name="no"/>
        <input type="hidden" value="<?= $dni?>" name="dni"/>
    </form>
    <?php
}