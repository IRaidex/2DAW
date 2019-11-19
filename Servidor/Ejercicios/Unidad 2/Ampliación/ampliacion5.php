<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ordenar</title>
    </head>
    <body>
        <?php


        $num = 1331;
        $numinv = 0;
        $cociente = $num;
        while ( $cociente != 0){
            $resto = $cociente % 10;
            $numinv = $numinv * 10 + $resto;
            $cociente = (int)($cociente / 10);
        }
        if ( $num == $numinv )
            print "El n&uacute;mero $num Es capic&uacute;a<br />";
        else
            print "El n&uacute;mero $num NO es capic&uacute;a<br />";


        ?>
    </body>
</html>