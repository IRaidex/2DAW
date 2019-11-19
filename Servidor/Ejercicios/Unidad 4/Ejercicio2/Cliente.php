<?php

require_once "Persona.php";

class Cliente extends Persona{

    private $descuento;

    public function __construct ($nombre,$email,$telefono,$descuento){
        parent::__construct($nombre,$email,$telefono);
        $this->descuento = $descuento;
    }

    public function getDescuento(){
        return $this->descuento;
    }

    public function setDescuento($descuento){
        $this->descuento = $descuento;
    }

}