<?php


include_once"Persona.php";
include_once"Jefe.php";
include_once"Empleado.php";
include_once"Cliente.php";

$j = new Jefe("Alex","alex@gmail.com",670367662,1200,"Administracion");
echo $j->mostrar();
echo $j->salario(400);
echo "<br>";
echo "----------------------------";
echo "<br>";
$e = new Empleado("Alex","alex@gmail.com",670367662,1200,"Administracion");
echo $e->mostrar();
echo $e->salario();