<?php

require_once "Animal.php";

class Perro extends Animal{

    public function __construct ($nombre,$patas){
        if($patas!=4){
            throw new Exception("Patas Incorrectas");
        }else if(!ctype_alpha($nombre)){
            throw new Exception("Nombre Incorrecto"); 
        }else if(!is_numeric($patas)){
            throw new Exception("Patas Incorrectas");
        }
        parent::__construct($nombre,$patas);
    }
    
    public function sonido(){
        return "¡GUAU!";
    }
}