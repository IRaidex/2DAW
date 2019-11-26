<?php

require_once"conexion.php";

$tablabd = $_GET['tabla'];

try {
    if($_POST["nombre"] != "" && $_POST["anyo"] != "" && $_POST["formato"] != "" && $_POST["fecha"] != "" && $_POST["precio"] != ""){

        $consulta = $conexion->prepare('INSERT INTO albumes (titulo,grupo,anyo,formato,fechacompra,precio) VALUES (?,?,?,?,?,?);');
        $consulta->bindParam(1, $_POST["nombre"]);
        $consulta->bindParam(2, $_REQUEST["grupo"]);
        $consulta->bindParam(3, $_POST["anyo"]);
        $consulta->bindParam(4, $_POST["formato"]);
        $consulta->bindParam(5, $_POST["fecha"]);
        $consulta->bindParam(6, $_POST["precio"]);
        $consulta->execute();
        header('Location: ' .$_SERVER['HTTP_REFERER']);
    }
} catch (PDOException $e) {
    echo 'Falló al borrar: ' . $e->getMessage();
}

