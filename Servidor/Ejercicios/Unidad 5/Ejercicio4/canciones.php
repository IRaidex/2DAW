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

$listaCanciones = $conexion->prepare('SELECT titulo FROM canciones WHERE album = ?;');
$listaCanciones->bindParam(1, $_GET["codigo"]);
$listaCanciones->execute();
$arrayCanciones = [];
while($registro = $listaCanciones->fetch()){
    $arrayCanciones[] = $registro;
}  

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            table,tr,td{
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
            <?php foreach ($arrayCanciones as $valor): ?>
            <tr>
                <td><?=$valor['titulo']?></td>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="javascript:history.back()">Atras</a>
        <a href="discografia.php">Volver al principio</a>
        <?php endif ?>
    </body>
</html>