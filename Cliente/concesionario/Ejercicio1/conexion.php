<?php

$servidor = "localhost";
$basededatos = "mysql:host=localhost;dbname=concesionario";
$usuario = 'root';
$contraseña = '';
$error="";


try {
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    $conexion = new PDO($basededatos, $usuario, $contraseña , $opciones );
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}