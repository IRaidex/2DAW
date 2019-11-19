<?php

include "personas.inc.php";
include "Persona.php";

$agenda=[];
/*
for($i=0 ; $i<count($personas) ; $i++){
    
    $agenda[] = new Persona($personas[$i]["idContacto"],$personas[$i]["nombre"],$personas[$i]["apellido1"],$personas[$i]["apellido2"],$personas[$i]["telefono"]);
    
}*/


foreach ($personas as $persona) {
    //echo '<pre>'.print_r($persona,true).'</pre>';
    $agenda[] = new Persona($persona["idContacto"],$persona["nombre"],$persona["apellido1"],$persona["apellido2"],$persona["telefono"]);
    //echo $p;
    /*
    $agenda[] = $p;*/
}

echo "<div>";

foreach ($agenda as $a){
    echo $a;
}

echo "</div>";

$agenda[] = new Persona("8","Sandra","Alcudia","Palomo","687661877");

echo "<h1>Nuevo Contacto</h1>";

echo "<div>";

foreach ($agenda as $a){
    echo $a;
}

echo "</div>";
