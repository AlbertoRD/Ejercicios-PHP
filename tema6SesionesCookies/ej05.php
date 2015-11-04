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
        <style type="text/css">
            body{
                position: relative;
                width: 1000px;
                margin: 0 auto;
            }
            .table{
                display: table;
            }
            .row{
                display: table-row;
            }
            .cell{
                display: table-cell;
                width: 25%;
                height: 50px;
                text-align: center;
                padding: 5px;

            }
            #productos{
                float: left;
                position: relative;
                width: 70%;
                border-right: thin solid black;
            }
            #carrito{
                float: left;
                position: relative;
                width: 29%;
            }
            img{
                position: relative;
                height: 100px;
                vertical-align: middle;
            }
            .cell.imagen{
                height: auto;
            }
            .articulos{
                width: 100px;
            }
            .oculto{
                display: none;
            }
        </style>
    </head>
    <body>
        <?php
        $productoComprado = $_POST['btnComprar'];
        $productoEliminado = $_POST['btnEliminar'];
        $total = & $_SESSION['total'];
        $carrito = & $_SESSION['carrito'];
        $aProductos = [
            "pc" => array("imagen" => "pc.png", "descripcion" => "PC", "precio" => "245€"),
            "movil" => array("imagen" => "movil.png", "descripcion" => "Movil", "precio" => "80€"),
        ];
        if (!isset($total)) {
            $total = 0;
        }
        if (!isset($carrito)) {
            $carrito = [];
        } else {
            if (isset($productoComprado)) {
                if (!isset($carrito[$productoComprado])) {
                    $carrito[$productoComprado] = 1;
                } else {
                    $carrito[$productoComprado] ++;
                }
                $total+= $aProductos[$productoComprado]['precio'];
            }
            if (isset($productoEliminado)) {
                if ($carrito[$productoEliminado] > 1) {
                    $carrito[$productoEliminado] --;
                } else {
                    unset($carrito[$productoEliminado]);
                }
                $total-= $aProductos[$productoEliminado]['precio'];
            }
        }
        ?>
        <div id="productos" class="table">
            <div class="row" >
                <div class="cell" id="tituloProductos">PRODUCTOS</div>
            </div>
            <form method="post">
<?php foreach ($aProductos as $producto => $valor) { ?>
                    <div class="row">
                        <div class="cell imagen"><img src='img/<?= $valor['imagen'] ?>'/></div>
                        <div class="cell descripcion"><?= $valor['descripcion'] ?></div>
                        <div class="cell precio"><?= $valor['precio'] ?></div>
                        <div class="cell boton"><button type="submit" class="btnComprar" value="<?= $producto ?>" name="btnComprar">Comprar</button></div>
                    </div>
<?php } ?>
            </form>
        </div>
        <div id="carrito">
            <div class="table">
                <div class="row">
                    <div class="cell">CARRITO</div>
                </div>
                <div class="row">
                    <div class="cell">TOTAL: <?= $total ?>€</div>
                </div>
                <form method="post">
                            <?php foreach ($carrito as $producto => $valor) { ?>
                        <div class="row">
                            <div class="cell articulos">
    <?= $valor ?> x <?= $aProductos[$producto]['descripcion'] ?>
                            </div>
                            <div class="cell">
                                <button type="submit" name="btnEliminar" value="<?= $producto ?>">Eliminar</button>
                            </div>
                        </div>
<?php } ?>
                </form>
            </div>
        </div>
    </body>
</html>