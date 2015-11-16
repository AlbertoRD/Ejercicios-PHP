<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}
error_reporting(E_ALL ^ E_NOTICE);

//Limito la busqueda 
$TAMANO_PAGINA = 5;

//examino la página a mostrar y el inicio del registro a mostrar 
$pagina = $_GET["pagina"];
if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $TAMANO_PAGINA;
}

//miro a ver el número total de campos que hay en la tabla con esa búsqueda 
$ssql = "select * from cliente ";
$rs = $conexion->query($ssql);
$num_total_registros = $rs->rowCount();

$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

/*  echo "Número de registros encontrados: " . $num_total_registros . "<br>";
  echo "Se muestran páginas de " . $TAMANO_PAGINA . " registros cada una<br>";
 */
$consulta = $conexion->query("SELECT * FROM cliente LIMIT $inicio,$TAMANO_PAGINA");
if ($total_paginas > 1) {
    for ($i = 1; $i <= $total_paginas; $i++) {
        if ($pagina == $i)
            echo $pagina . " ";
        else
            echo "<a href='mostrar.php?pagina=" . $i . "'>" . $i . "</a> ";
    }
}
?>
<table>
    <tr>
        <th>DNI</th>
        <th>NOMBRE</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
    </tr>
    <?php
    while ($cliente = $consulta->fetchObject()) {
        ?>
        <tr>
            <td><?= $cliente->dni ?></td>
            <td><?= $cliente->nombre ?></td>
            <td><?= $cliente->direccion ?></td>
            <td><?= $cliente->telefono ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<form method="post" action="ej01.php">
    <button type="submit">Volver</button>
</form>