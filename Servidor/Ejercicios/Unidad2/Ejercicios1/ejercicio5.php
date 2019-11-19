<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ordenar</title>
    </head>
    <body>
        <?php

        $numeros=[];
        for($i=0 ; $i<10 ; $i++){
            $numeros[]= rand(1, 100);
            echo $numeros[$i]."-";
        }
        echo "<br>";
        for($i=0 ; $i<10 ; $i++){
            for($j=0 ; $j<10 ; $j++){
                if($numeros[$i]<$numeros[$j]){
                    $aux=$numeros[$i];
                    $numeros[$i]=$numeros[$j];
                    $numeros[$j]=$aux;
                }  
            }
        }

        for($i=0 ; $i<10 ; $i++){
            $numeros[]= rand(1, 100);
            echo $numeros[$i]."-";
        }

        echo "<br>";

        asort($numeros);


        ?>
    </body>
</html>