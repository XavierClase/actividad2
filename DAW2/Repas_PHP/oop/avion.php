<?php
require_once 'vehiculo.php';
class Avion extends Vehiculo{

    //Atributos heredados



    //Metodo propio, el resto heredados

    public function volar() {
        $info = 'Despega';

        return $info;
    }
}