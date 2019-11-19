<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ordenar</title>
    </head>
    <body>
        <?php

        $num1=0;
        $num2=1;
        echo $fibonacci=rand(1,25);
        echo "<br>";
        echo "0"." 1 ";
        for($i=0 ; $i<$fibonacci ; $i++){
            $suma=$num1+$num2;
            $num1=$num2;
            $num2=$suma;
            echo $suma." ";
        }

        ?>
    </body>
</html>