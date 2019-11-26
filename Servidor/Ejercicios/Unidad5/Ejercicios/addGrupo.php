<?php

require_once"conexion.php";

$tablabd = $_GET['tabla'];

try {
    if($_POST["grupo"] != ""){

        $consulta = $conexion->prepare('INSERT INTO grupos (nombre) VALUES (?);');
        $consulta->bindParam(1, $_POST["grupo"]);
        $consulta->execute();
        header('Location: ' .$_SERVER['HTTP_REFERER']);
    }
} catch (PDOException $e) {
    echo 'Falló al borrar: ' . $e->getMessage();
}

