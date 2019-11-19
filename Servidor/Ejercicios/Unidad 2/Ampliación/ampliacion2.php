<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ordenar</title>
    </head>
    <body>
        <?php
        
        $x=rand(1,25);
        
        echo $x;
        echo "<br>";
        echo fact($x);
        
        function fact($x){
            if($x<2) return 1;
            return $x*fact($x-1);
        }
        
        ?>
    </body>
</html>