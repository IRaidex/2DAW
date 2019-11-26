<?php

require_once"conexion.php";


try {
    $listaCanciones = $conexion->prepare('SELECT titulo,codigo FROM canciones WHERE album = ?;');
    $listaCanciones->bindParam(1, $_GET["codigo"]);
    $listaCanciones->execute();
    $arrayCanciones = [];
    while($registro = $listaCanciones->fetch()){
        $arrayCanciones[] = $registro;
    }  
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
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
        <script src="confirmar.js"></script>
    </head>
    <body>
        <?php if($error): ?>
        <?=  $error ?>
        <?php else: ?>
        <table>
            <?php foreach ($arrayCanciones as $valor): ?>
            <tr>
                <td><?=$valor['titulo']?></td>
                <td><a href="javascript:confirmar('canciones','<?=$valor['codigo']?>')"><img src="papelera.jpg" alt="papelera" width="25" height="25"></a></td>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="javascript:history.back()">Atras</a>
        <a href="discografia.php">Volver al principio</a>
        <?php endif ?>
        <h1>Añadir Cancion</h1>
        <form action="addCancion.php" method="post">
            <label for="nombre">Titulo</label>
            <input type="text" name="titulo"><br>             
            <label for="anyo">Duracion</label>
            <input type="text" name="duracion"><br>
            <label for="formato">Posicion</label>
            <input type="text" name="posicion"><br>
            <input type="hidden" name="album" value="<?=$_REQUEST["codigo"];?>"><br>
            <button type="submit" name="enviar">Enviar</button>      
        </form>
        
        <script>
        
        function confirmar(tabla,valor){
            let url = 'borrar.php?tabla='+tabla+'&codigo='+valor;
            if(confirm("Seguro que quieres borrar?")){
               location.href = url;
               }
        }
        
        
        </script>
        
        
        
    </body>
</html>














