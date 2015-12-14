<?php

class Vehiculo {

    private static $vehiculosCreados = 0;
    private static $kilometrosTotales = 0;
    private $kmRecorridos;

    public function __construct() {
        $this->kmRecorridos = 0;
        self::$vehiculosCreados++;
    }

    public function anda($kilometros) {
        $this->kmRecorridos += $kilometros;
        self::$kilometrosTotales+=$kilometros;
    }

    public static function getVehiculosCreados() {
        return self::$vehiculosCreados;
    }

    public static function getKilometrosTotales() {
        return self::$kilometrosTotales;
    }

    public function getKmRecorridos() {
        return $this->kmRecorridos;
    }

    //put your code here
}
