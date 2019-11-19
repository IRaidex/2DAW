<?php


class Persona{

    protected $nombre;
    protected $email;
    protected $telefono;

    public function __construct ($nombre,$email,$telefono){
        $this->nombre = $nombre;
        $this->email = $email;       
        $this->telefono = $telefono;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }


    public function mostrar(){
        return "Nombre: $this->nombre<br>Email: $this->email<br>Telefono: $this->telefono";
    }
}
