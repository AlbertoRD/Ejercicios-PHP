<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL ^ E_NOTICE);
try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
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
    </head>
    <body>
        <div id="botones">
            <form method="post">
                <button type="submit" name="btnCrear" value="C">Crear</button>
                <button type="submit" name="btnListar" value="R">Mostrar</button>
                <button type="submit" name="btnModificar" value="U">Modificar</button>
                <button type="submit" name="btnEliminar" value="D">Eliminar</button>
            </form>
        </div>
        <?php
        foreach ($_POST as $key => $value) {
            $valor = $value;
        }
        switch ($valor) {
            case "C":
                ?>
                <form method="post" action="create.php">
                    <table>
                        <tr>
                            <td>DNI:</td>
                            <td><input type="text" name="dni"/></td>
                        </tr>
                        <tr>
                            <td>NOMBRE:</td>
                            <td><input type="text" name="nombre"/></td>
                        </tr>
                        <tr>
                            <td>DIRECCION:</td>
                            <td><input type="text" name="direccion"/></td>
                        </tr>
                        <tr>
                            <td>TELEFONO:</td>
                            <td><input type="text" name="telefono"/></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Enviar"/>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php
                break;
            case "R":
                header("Location: mostrar.php");
                break;
            case "U":
                ?>
                <form method="post" action="update.php">
                    <table>
                        <tr>
                            <td>
                                DNI:
                            </td>
                            <td><input type="text" name="dni"</td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Enviar"/></td>
                        </tr>
                    </table>
                </form>
                <?php
                break;
            case "D":
                ?>
                <form method="post" action="delete.php">
                    <table>
                        <tr>
                            <td>
                                DNI:
                            </td>
                            <td><input type="text" name="dniBorrar"</td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Enviar"/></td>
                        </tr>
                    </table>
                </form>
                <?php
                break;
        }
        ?>
    </body>
</html>
