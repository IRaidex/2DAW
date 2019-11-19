
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
            <?php foreach ($arrayGrupos as $valor): ?>
            <tr>
                <td><a href="album.php?codigo=<?= $valor['codigo'] ?>"><?=$valor['nombre'] ?></a></td>
                <td><button><img src="papelera.jpg" alt="papelera" width="25" height="25"></button></td>
            </tr>
            <?php endforeach ?>
        </table>
        <?php endif ?>
        <br>
        <h1>Añadir Grupo</h1>
        <form action="discografia.php">
            <p>Nombre del grupo</p>
            <input type="text" name="grupo">      
        </form>  
    </body>
</html>