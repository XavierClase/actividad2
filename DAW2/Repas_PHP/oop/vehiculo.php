<?php

class Vehiculo {

    //Atributos
    protected $modelo;
    protected $compañia; 
    protected $numPlazas; 


    //Metodos
    public function __construct($modelo, $compañia, $numPlazas) {
        $this->modelo = $modelo;
        $this->compañia = $compañia;
        $this->numPlazas = $numPlazas;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    
    public function getCompañia() {
        return $this->compañia;
    }

    
    public function setCompañia($compañia) {
        $this->compañia = $compañia;

        return $this;
    }

    
    public function getNumPlazas() {
        return $this->numPlazas;
    }

    
    public function setNumPlazas($numPlazas) {
        $this->numPlazas = $numPlazas;

        return $this;
    }

    public function muestraInfo() {
        $info = '<h1>Información del avion</h1>';
        $info .= 'Modelo: '.$this->modelo;
        $info .= '<br>Compañia: '.$this->compañia;

        return $info;
    }
}