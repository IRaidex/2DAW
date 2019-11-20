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


if(isset($_POST["enviar"])){
    if($_POST["titulo"] != "" && $_POST["duracion"] != "" && $_POST["posicion"] != ""){

        $consulta = $conexion->prepare('INSERT INTO canciones (titulo,album,duracion,posicion) VALUES (?,?,?,?);');
        $consulta->bindParam(1, $_POST["titulo"]);
        $consulta->bindParam(2, $_REQUEST["grupo"]);
        $consulta->bindParam(3, $_POST["anyo"]);
        $consulta->bindParam(4, $_POST["formato"]);
        $consulta->bindParam(5, $_POST["fecha"]);
        $consulta->bindParam(6, $_POST["precio"]);
        $consulta->execute();

    }
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
            <?php foreach ($arrayCanciones as $valor): ?>
            <tr>
                <td><?=$valor['titulo']?></td>
                <td><button><img src="papelera.jpg" alt="papelera" width="25" height="25"></button></td>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="javascript:history.back()">Atras</a>
        <a href="discografia.php">Volver al principio</a>
        <?php endif ?>
        <h1>Añadir Cancion</h1>
        <form action="#" method="post">
            <label for="nombre">Titulo</label>
            <input type="text" name="titulo">             
            <label for="anyo">Duracion</label>
            <input type="text" name="duracion">
            <label for="formato">Posicion</label>
            <input type="text" name="posicion">
            <input type="hidden" name="album" value="<?=$_REQUEST["codigo"];?>">
            <button type="submit" name="enviar">Enviar</button>      
        </form>
    </body>
</html>