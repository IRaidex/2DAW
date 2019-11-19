<?php

require_once "Animal.php";

class Pajaro extends Animal{

    public function __construct ($nombre,$patas){
        parent::__construct($nombre,$patas);     
    }

    public function sonido(){
        return "¡PIO!";
    }
}