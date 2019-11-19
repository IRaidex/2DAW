<?php

require_once "Animal.php";

class Gato extends Animal{

    public function __construct ($nombre,$patas){
        parent::__construct($nombre,$patas);     
    }
    
    public function sonido(){
        return "¡MIAU!";
    }
}