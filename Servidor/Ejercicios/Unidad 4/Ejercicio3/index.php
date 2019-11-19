<?php

include_once"Animal.php";
include_once"Gato.php";
include_once"Perro.php";
include_once"Pato.php";
include_once"Pajaro.php";

$gato = new Gato("Neo",4);
$perro = new Perro("Neo",4);
$pato = new Pato("Neo",4);
$pajaro = new Pajaro("Neo",4);

echo "Gato: ".$gato->sonido()."<br>";
echo "Perro: ".$perro->sonido()."<br>";
echo "Pato: ".$pato->sonido()."<br>";
echo "Pajaro: ".$pajaro->sonido()."<br>";