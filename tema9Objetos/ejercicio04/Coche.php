<?php

include_once './Vehiculo.php';

class Coche extends Vehiculo {

    public function quemarRueda(){
        echo "Estoy quemando las ruedas del coche.";
    }
}

