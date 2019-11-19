<?php

abstract class Animal{

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

} 