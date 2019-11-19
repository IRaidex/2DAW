
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

$listaGrupos = $conexion->query('SELECT * FROM grupos');
$arrayGrupos = [];
while($registro = $listaGrupos->fetch()){
    $arrayGrupos[] = $registro;
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
            <?php foreach ($arrayGrupos as $valor): ?>
            <li><a href="album.php?codigo=<?= $valor['codigo'] ?>"><?=$valor['nombre'] ?></a></li>
            <?php endforeach ?>
        </ul>
        <?php endif ?>
    </body>
</html>