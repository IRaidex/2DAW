<?php

echo '<h1>Producto</h1>'."<br>";

if($_REQUEST['nombre']==""){
    echo 'Nombre: '.'<br>';
}else{
    echo 'Nombre: '.$_REQUEST['nombre'].'<br>';
}

if($_REQUEST['codigo']==""){
    echo 'Codigo:'."<br>";
}else{
    echo 'Codigo: '.$_REQUEST['codigo'].'<br>';
}

if($_REQUEST['precio']==""){
    echo 'Precio:'."<br>";
}else{
    echo 'Precio: '.$_REQUEST['precio'].'<br>';
}

if($_REQUEST['descripcion']==""){
    echo 'Descripcion:'."<br>";
}else{
    echo 'Descripcion: '.$_REQUEST['descripcion'].'<br>';
}

if($_REQUEST['fabricante']==""){
    echo 'Fabricante:'.'<br>';
}else{
    echo 'Fabricante: '.$_REQUEST['fabricante'].'<br>';
}

if($_REQUEST['cantidad']==""){
    echo 'Cantidad:'.'<br>';
}else{
    echo 'Cantidad: '.$_REQUEST['cantidad'].'<br>';
}

if($_REQUEST['fecha']==""){
    echo 'Fecha:'.'<br>';
}else{
    echo 'Fecha: '.$_REQUEST['fecha'].'<br>';
}


?>