<?php

require_once "Persona.php";

class Jefe extends Persona{

    private $sueldo;
    private $categoria;

    public function __construct ($nombre,$email,$telefono,$sueldo,$categoria){
        parent::__construct($nombre,$email,$telefono);
        $this->sueldo = $sueldo;
        $this->categoria = $categoria;
    }    
    
    public function getSueldo(){
        return $this->sueldo;
    }

    public function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function mostrar(){
        return parent::mostrar()."<br>Sueldo: $this->sueldo<br>Categoria: $this->categoria<br>";
    }

    public function salario(){
        $argumentos = func_get_args();
        if(count(func_get_args()) == 0){
            return "Sueldo: $this->sueldo";
        }else{
            $total =  $this->sueldo + $argumentos[0];
            return "Sueldo: $total";
        }
    }
}