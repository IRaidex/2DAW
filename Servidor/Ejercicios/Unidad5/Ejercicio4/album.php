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
    if($_POST["nombre"] != "" && $_POST["anyo"] != "" && $_POST["formato"] != "" && $_POST["fecha"] != "" && $_POST["precio"] != ""){

        $consulta = $conexion->prepare('INSERT INTO albumes (titulo,grupo,anyo,formato,fechacompra,precio) VALUES (?,?,?,?,?,?);');
        $consulta->bindParam(1, $_POST["nombre"]);
        $consulta->bindParam(2, $_REQUEST["grupo"]);
        $consulta->bindParam(3, $_POST["anyo"]);
        $consulta->bindParam(4, $_POST["formato"]);
        $consulta->bindParam(5, $_POST["fecha"]);
        $consulta->bindParam(6, $_POST["precio"]);
        $consulta->execute();

    }
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
            label{
                display: inline-block;
                width: 80px;
                padding: 5px;
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
        <form action="#" method="post">
            <label for="nombre">Titulo</label>
            <input type="text" name="nombre"><br>            
            <label for="anyo">Año</label>
            <input type="text" name="anyo"><br>
            <label for="formato">Formato</label>
            <input type="text" name="formato"><br>
            <label for="fecha">Fecha de Compra</label>
            <input type="date" name="fecha"><br>
            <label for="precio">Precio</label>
            <input type="text" name="precio"><br>
            <input type="hidden" name="grupo" value="<?=$_REQUEST["codigo"];?>"><br>
            <button type="submit" name="enviar">Enviar</button>      
        </form>

    </body>
</html>