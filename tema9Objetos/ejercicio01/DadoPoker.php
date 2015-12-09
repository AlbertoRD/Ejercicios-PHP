<?php

class DadoPoker {

    private static $tiradasTotales = 0;
    private $figuras = ["AS", "K", "Q", "J", "7", "8"];
    private $valor;

    public function tira() {
        $this->valor = rand(0, 5);
        self::$tiradasTotales++;
    }

    public function nombreFigura() {
        return $this->figuras[$this->valor];
    }

    public static function getTiradasTotales() {
        return self::$tiradasTotales;
    }

    public function __toString() {
        return "Figura: " . $this->nombreFigura();
    }

}
