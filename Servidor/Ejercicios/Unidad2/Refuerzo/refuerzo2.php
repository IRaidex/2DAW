<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php

        $aleatorio= rand(1,100);

        if($aleatorio%3==0){
            echo "<h1>".$aleatorio." Es Multiplo de 3</h1>";
        }else{
            echo "<h1>".$aleatorio." No es Multiplo de 3</h1>";
        }

        ?>
    </body>
</html>