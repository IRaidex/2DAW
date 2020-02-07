<?php
if(isset($_GET['enviar'])){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost.servidor/consulta.php/?tipo='.$_GET['action']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res);

}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Discografia</title>
    </head>
    <body>
        <br>
        <br>
        <form action="">
            <select name="action" id="opcion">
                <option value="albumes">Albumes</option>
                <option value="grupos">Grupos</option>
                <option value="canciones">Canciones</option>
            </select>
            <input type="submit" name="enviar">
        </form>
        <?php if(isset($res)): ?>
            <?php foreach($res as $valor => $valores): ?>
                <?php foreach($valores as $resultado => $alex): ?>
                    <span><?= $resultado ?> : <?= $alex ?> - </span>
                <?php endforeach ?><br>
            <?php endforeach ?>
        <?php endif ?>
    </body>
</html>