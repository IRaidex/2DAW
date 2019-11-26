
<?php

require_once"conexion.php";

try {
    $listaGrupos = $conexion->query('SELECT * FROM grupos');
    $arrayGrupos = [];
    while($registro = $listaGrupos->fetch()){
        $arrayGrupos[] = $registro;
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
        </style>
         <script src="confirmar.js"></script>
    </head>
    <body>
        <?php if($error): ?>
        <?=  $error ?>
        <?php else: ?>
        <table>
            <?php foreach ($arrayGrupos as $valor): ?>
            <tr>
                <td><a href="album.php?codigo=<?= $valor['codigo'] ?>"><?=$valor['nombre'] ?></a></td>
                <td><a href="javascript:confirmar('grupos','<?=$valor['codigo']?>')"><img src="papelera.jpg" alt="papelera" width="25" height="25"></a></td>
            </tr>
            <?php endforeach ?>
        </table>
        <?php endif ?>
        <br>
        <h1>Añadir Grupo</h1>
        <form action="addGrupo.php" method="post">
            <p>Nombre del grupo</p>
            <input type="text" name="grupo">
            <button type="submit" name="enviar">Enviar</button>      
        </form>  
    </body>
</html>