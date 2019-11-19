<?php

echo '<h1>Producto</h1>'."<br>";

if(!preg_match('/^[a-zA-Z]{3,}/', $_REQUEST['nombre'])){
    echo 'Nombre: '.'Tienes que introducir una cadene de la a-z y minimo 3 caracteres'.'<br>';
}else{
    echo 'Nombre: '.$_REQUEST['nombre'].'<br>';
}

if(!preg_match('/^[0-9]{3}$/',$_REQUEST['codigo'])){
    echo 'Codigo:'.'Tienes que introducir un codigo de 3 cifras.'."<br>";
}else{
    echo 'Codigo: '.$_REQUEST['codigo'].'<br>';
}

if(!preg_match('/^[0-9]{1,}$/',$_REQUEST['precio'])){
    echo 'Precio:'.'Tienes que introducir minimo 1 cifra'."<br>";
}else{
    echo 'Precio: '.$_REQUEST['precio'].'<br>';
}

if(!preg_match('/^[a-zA-Z]{3,}/',$_REQUEST['descripcion'])){
    echo 'Descripcion:'.'Tienes que introducir una cadene de la a-z y minimo 3 caracteres'."<br>";
}else{
    echo 'Descripcion: '.$_REQUEST['descripcion'].'<br>';
}

if(!preg_match('/^[a-zA-Z]{3,}/',$_REQUEST['fabricante'])){
    echo 'Fabricante:'.'Tienes que introducir una cadene de la a-z y minimo 3 caracteres'.'<br>';
}else{
    echo 'Fabricante: '.$_REQUEST['fabricante'].'<br>';
}

if(!preg_match('/^[0-9]{1,}$/',$_REQUEST['cantidad'])){
    echo 'Cantidad:'.'Tienes que introducir minimo 1 cifra -> "'.$_REQUEST['cantidad'].'"<br>';
}else{
    echo 'Cantidad: '.$_REQUEST['cantidad'].'<br>';
}

if(!preg_match('/^(\d{4})(\/|-)(0[1-9]|1[0-2])\2([0-2][0-9]|3[0-1])$/',$_REQUEST['fecha'])){
    echo 'Fecha:'.'Tienes que introducir una fecha "'.$_REQUEST['fecha'].'"<br>';
}else{
    echo 'Fecha: '.$_REQUEST['fecha'].'<br>';
}


?>