<?php

require_once "Persona.php";

class Empleado extends Persona{

    private $sueldo;
    private $departamento;

    public function __construct ($nombre,$email,$telefono,$sueldo,$departamento){
        parent::__construct($nombre,$email,$telefono);
        $this->sueldo = $sueldo;
        $this->departamento = $departamento;
    }

    public function getSueldo(){
        return $this->sueldo;
    }

    public function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    public function getDepartamento(){
        return $this->departamento;
    }

    public function setDepartamento($departamento){
        $this->departamento = $departamento;
    }

    public function mostrar(){
        return parent::mostrar()."<br>Sueldo: $this->sueldo<br>Departamento: $this->departamento<br>";
    }

    public function salario(){
        return "Salario: $this->sueldo";
    }
}