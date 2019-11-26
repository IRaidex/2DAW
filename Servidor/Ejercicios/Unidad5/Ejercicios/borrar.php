<?php

require_once"conexion.php";

$tablabd = $_GET['tabla'];
try {
    $consulta = $conexion->prepare('DELETE FROM '.$tablabd.' WHERE codigo=? ;');
    $consulta->bindParam(1, $_GET["codigo"]);
    $consulta->execute();
    header('Location: ' .$_SERVER['HTTP_REFERER']);
} catch (PDOException $e) {
    echo 'Falló al borrar: ' . $e->getMessage();
}

