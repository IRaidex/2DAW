<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ordenar</title>
    </head>
    <body>
        <?php


        $cadena="ala";

        function palindromo($cadena){
            $fin=strlen($cadena)-1;
            for($i=0 ; $i<strlen($cadena) ; $i++,$fin--){
                if($cadena[$i]!=$cadena[$fin]){
                    return false;
                }
                return true;
            }
        }
        if(palindromo($cadena)==true){
            echo "Es palindromo";
        }else{
            echo "No es palindromo";
        }

        ?>
    </body>
</html>