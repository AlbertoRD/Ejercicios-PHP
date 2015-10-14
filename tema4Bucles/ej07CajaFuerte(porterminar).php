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
        <h2>
            Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
            programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
            “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
            satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
        </h2>
        <?php
        $combinacion = 5493;
        $oportunidades = (isset($_POST['oportunidades'])) ? $_POST['oportunidades'] : 4;
        $mensaje;
        if (isset($_POST['txtNumero'])) {
            $numero = $_POST['txtNumero'];
            if ($numero != $combinacion) {
                $oportunidades--;
                ?>
                <form method="post">
                    <label>Introduzca la combinacion</label>
                    <input type="number" id="txtNumero" name="txtNumero"/>
                    <input type="hidden" name="oportunidades" value="<?= $oportunidades ?>"/>
                    <button type="submit">Abrir</button>
                    <label><?= $mensaje ?></label>
                </form>
                <?php
                $mensaje = ($oportunidades == 0) ? "Has agotado tus oportunidades" :
                        "Lo siento, esa no es la combinación. Oportunidades restantes $oportunidades";
            } else {
                $mensaje = "La caja fuerte se ha abierto
            satisfactoriamente";
            }
        }

        /*  if (isset($numero))
          var_dump($_POST['txtNumero']); */
        ?>
    </body>
</html>
