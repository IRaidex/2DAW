<?php


if(isset($_POST["cookie"])){
    //Pongo 10 s para comprobar antes si funciona.
    setcookie('cookie', 'aceptar', time()+10);
}

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>

            div{
                border: 3px solid black;
                font-size: 100px;
            }
            input{
                width: 100px;
                height: 50px;
                margin: 1%;
            }
        </style>
    </head>
    <body>
       <?php if(!isset($_COOKIE["cookie"]) && !isset($_GET["cookie"])): ?>
        <div>
            <form action="#" method="post"><label for="cookie">Este sitio web utiliza cookies</label><input type="submit" name="cookie" value="Aceptar"></form>
        </div>
        <?php else: ?>
        <p>Cookie Aceptada</p>
        <?php endif ?>
    </body>
</html>