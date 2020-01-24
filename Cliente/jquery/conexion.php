<?php

$servidor = "localhost";
$basededatos = "mysql:host=localhost;dbname=jquery;charset=UTF8";
$usuario = 'jquery';
$contraseña = 'jquery';
$error="";


try {
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    $conexion = new PDO($basededatos, $usuario, $contraseña , $opciones );
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
