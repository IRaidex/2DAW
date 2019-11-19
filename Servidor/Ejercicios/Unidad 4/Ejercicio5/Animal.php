<?php

trait bienvenida{
    public function saludo(){
        return "Bienvenido al zoológico 2º DAW";
    }
}

abstract class Animal{
    
    use bienvenida;
    
    protected $nombre;
    protected $patas;

    public function __construct ($nombre,$patas){
        $this->nombre = $nombre;
        $this->patas = $patas;       
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getPatas(){
        return $this->patas;
    }

    public function setPatas($patas){
        $this->patas = $patas;
    }

    abstract public function sonido();

    public function __toString(){
        return "Saludo: ".$this->saludo()."<br>Nombre: ".$this->nombre."<br>Patas: ".$this->patas."<br>Sonido: ".$this->sonido()."<br><br>";
    }



} 