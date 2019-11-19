<?php

include_once"Animal.php";
include_once"Gato.php";
include_once"Perro.php";
include_once"Pato.php";
include_once"Pajaro.php";

try{
    $pajaro = new Pajaro("Neo",2);
    echo "Pajaro: ".$pajaro->sonido()."<br>";
    echo $pajaro;
}catch(Exception $ex){
    echo $ex->getMessage();
}

try{
    $gato = new Gato("Neo",4);
    echo "Gato: ".$gato->sonido()."<br>";
    echo $gato;
}catch(Exception $ex){
    echo $ex->getMessage();
}

try{
    $perro = new Perro("Neo",4);
    echo "Perro: ".$perro->sonido()."<br>";
    echo $perro;
}catch(Exception $ex){
    echo $ex->getMessage();
}

try{
    $pato = new Pato("Neo",2);
    echo "Pato: ".$pato->sonido()."<br>";
    echo $pato;
}catch(Exception $ex){
    echo $ex->getMessage();
}
