<?php

if(isset($_POST["modo"])){
    
    setcookie("cookie",$_POST["modo"],time()+30);
    $_COOKIE["cookie"] = $_POST["modo"];
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="<?= $_COOKIE["cookie"] ?>">
    </head>
    <body>
        <form action="#" method="post">
            <button type="submit" name="modo" value="black.css">Modo Oscuro</button>
            <button type="submit" name="modo" value="light.css">Modo Claro</button>
        </form>
    </body>
</html>