<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ordenar</title>
    </head>
    <body>
        <?php

        echo $num=13;
        echo "<br>";
        function binario($num){
            if($num<2){
                return $num;  
            }else{
                $division=floor($num/2);
                $resto=$num%2;
            }
            return binario($division)*10+$resto;
        }

        echo binario($num);
        ?>
    </body>
</html>