<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculando</title>
</head>
<body>
    <?php
        $num1=1;
        $num2=2;
        $mayor=0;
        if($num1>$num2){
            $mayor = $num1;
        }else{
            $mayor=$num2;
        }
        
        echo $mayor.' es el mayor<br>';
        
        if($num1%2 == 0){
            echo $num1.' es par<br>';
        }else{
            echo $num1.' es impar<br>';
        }
    
        if($num2%2 == 0){
            echo $num2.' es par<br>';
        }else{
            echo $num2.' es impar<br>';
        }
        
        $suma=$num1+$num2;
        $resta=$num1-$num2;
        $multiplicacion=$num1*$num2;
        $division=$num1/$num2;
        $modulo=$num1%$num2;
    
        echo 'Suma: '.$num1.'+'.$num2.'='.$suma.'<br>';
        echo 'Resta: '.$num1.'-'.$num2.'='.$resta.'<br>';
        echo 'Multiplicacion: '.$num1.'*'.$num2.'='.$multiplicacion.'<br>';
        echo 'Division: '.$num1.'/'.$num2.'='.$division.'<br>';
        echo 'Modulo: '.$num1.'%'.$num2.'='.$modulo.'<br>';
    ?>
</body>
</html>