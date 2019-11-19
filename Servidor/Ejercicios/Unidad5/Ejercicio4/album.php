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
        <style>
            table,tr{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <?php if($error): ?>
        <?=  $error ?>
        <?php else: ?>
        <table>
            <?php foreach ($arrayAlbumes as $valor): ?>
            <tr>
                <td><a href="canciones.php?codigo=<?= $valor['codigo'] ?>"><?=$valor['titulo'] ?></a></td>
                <td><button><img src="papelera.jpg" alt="papelera" width="25" height="25"></button></td>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="javascript:history.back()">Atras</a>
        <a href="discografia.php">Volver al principio</a>
        <?php endif ?>

        <br>
        <h1>Añadir Album</h1>
        <form action="album.php">
            <p>Nombre del Album</p>
            <input type="text" name="nombre">             
            <p>Año</p>
            <input type="text" name="anyo">
            <p>Formato</p>
            <input type="text" name="formato">      
        </form>

    </body>
</html>