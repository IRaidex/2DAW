<?php

require_once"conexion.php";

$tablabd = $_GET['tabla'];

try {
    if($_POST["titulo"] != "" && $_POST["duracion"] != "" && $_POST["posicion"] != ""){

        $consulta = $conexion->prepare('INSERT INTO canciones (titulo,album,duracion,posicion) VALUES (?,?,?,?);');
        $consulta->bindParam(1, $_POST["titulo"]);
        $consulta->bindParam(2, $_REQUEST["album"]);
        $consulta->bindParam(3, $_POST["duracion"]);
        $consulta->bindParam(4, $_POST["posicion"]);
        $consulta->execute();
        header('Location: ' .$_SERVER['HTTP_REFERER']);
    }
} catch (PDOException $e) {
    echo 'Falló al borrar: ' . $e->getMessage();
}

