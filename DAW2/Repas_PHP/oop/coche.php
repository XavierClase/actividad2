<?php
require_once 'vehiculo.php';
class Coche extends Vehiculo{

    //Atributos heredados menos propio
    protected $matricula;

    //Sobreescribimos el constructor

    public function __construct($modelo, $compañia, $numPlazas, $matricula) {
        parent::__construct($modelo, $compañia, $numPlazas);
        $this->matricula = $numPlazas;
    }

    //Metodos heredados menos propios

    public function getMatricula() {
        return $this->matricula;
    }
 
    public function setMatricula($matricula) {
        $this->matricula = $matricula;

        return $this;
    }
}