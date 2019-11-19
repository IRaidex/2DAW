<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ordenar</title>
    </head>
    <body>
        <?php

        $campo=1;
        $numeros=[];
        
        for($i=0 ; $i<10 ; $i++){
            $numeros[]= rand(1, 100);
            echo $numeros[$i]."-";
        }
        
        function quicksort($array){
            if ($array == []) return [];
            $pivote = $array[0];
            $left=[];
            $right=[];
            for($i=1 ; $i<count($array) ; $i++){
                if($array[$i]>$pivote){
                    $right[]=$array[$i];
                }else if($array[$i]<=$pivote){
                    $left[]=$array[$i];
                }
            }
            return array_merge(quicksort($left),[$pivote], quicksort($right));
        }
        
        echo "<br>";
        $numeros=quicksort($numeros);
        print_r($numeros);


        ?>
    </body>
</html>