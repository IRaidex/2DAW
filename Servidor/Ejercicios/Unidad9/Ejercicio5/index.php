<?php
if(isset($_GET['enviar'])){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://rickandmortyapi.com/api/character/?name='.$_GET['enviar']);
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
        <title>Rick & Morty</title>
    </head>
    <body>
        <a href='index.php?enviar=rick'>Rick</a>
        <a href='index.php?enviar=morty'>Morty</a>
        <br>
        <br>
        <form action="">
            <input type="text" name="enviar">
            <input type="submit" name="envio">
        </form>
        <?php if(isset($res)): ?>
        <?php foreach($res->results as $valor): ?>
        <p>Nombre: <?= $valor->name ?></p> 
        <img src="<?= $valor->image ?>" alt="personajes">
        <?php endforeach ?>
        <?php endif ?>
    </body>
</html>