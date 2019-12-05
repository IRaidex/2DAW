<?php

require_once"conexion.php";
if($_POST["nombre"] != "" && $_POST["mail"] != "" && $_POST["comentario"] != ""){

    $consulta = $conexion->prepare('INSERT INTO comentarios (nombre,mail,comentario) VALUES (?,?,?);');
    $consulta->bindParam(1, $_POST["nombre"]);
    $consulta->bindParam(2, $_POST["mail"]);
    $consulta->bindParam(3, $_POST["comentario"]);
    $consulta->execute();

}

