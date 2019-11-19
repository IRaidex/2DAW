<?php

$servidor = "localhost";
$basededatos = "mysql:host=localhost;dbname=discografia";
$usuario = 'root';
$contraseña = '';
$error="";

try {
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    $conexion = new PDO($basededatos, $usuario, $contraseña , $opciones );
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

$listaAlbumes = $conexion->prepare('SELECT * FROM albumes WHERE grupo = ?');
$listaAlbumes->bindParam(1, $_GET['codigo']);
$listaAlbumes->execute();
$arrayAlbumes = [];
while($registro = $listaAlbumes->fetch()){
    $arrayAlbumes[] = $registro;
}  

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php if($error): ?>
        <?=  $error ?>
        <?php else: ?>
        <ul>
            <?php foreach ($arrayAlbumes as $valor): ?>
            <li><a href="canciones.php?codigo=<?= $valor['codigo'] ?>"><?=$valor['titulo'] ?></a></li>
            <?php endforeach ?>
        </ul>
        <?php endif ?>
        <a href="javascript:history.back()">Atras</a>
        <a href="discografia.php">Volver al principio</a>
    </body>
</html>