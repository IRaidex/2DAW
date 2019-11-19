<?php

require_once "Animal.php";

class Pato extends Animal{

    public function __construct ($nombre,$patas){
        parent::__construct($nombre,$patas);     
    }

    public function sonido(){
        return "¡CUAC!";
    }
}