<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
       <?php
        
        $array=["dado.png","bart.png","apple.png"];
        for($i = 0 ; $i<count($array) ; $i++){
             echo '<img src="ejercicio8.php?variable='.$array[$i].'" alt="logo">';
        }
           
        ?>
    </body>
</html>
