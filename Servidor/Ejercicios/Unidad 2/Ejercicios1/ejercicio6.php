<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ordenar</title>
    </head>
    <body>
        <?php

        $frase="Estoy practicando PHP y no me gusta mucho";
        $fraseinvertida=strrev($frase);
        $posicion=strpos($frase,"PHP");
        
        echo $frase."<br>";
        echo $fraseinvertida."<br>";
        echo $posicion."<br>";
        ?>
    </body>
</html>