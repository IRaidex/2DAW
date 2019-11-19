<?php
        
        function operaciones($num1,$num2){
            echo "<h1>Operaciones</h1>";
            $suma=$num1+$num2;
            echo "~Suma ".$num1." + ",$num2." = ".$suma;
            $resta=$num1-$num2;
            echo "<br>~Resta ".$num1." + ",$num2." = ".$resta;
            $mult=$num1*$num2;
            echo "<br>~Multiplicación ".$num1." x ",$num2." = ".$mult;
            $div=$num1/$num2;
            echo "<br>~División ".$num1." / ",$num2." = ".$div;
            $modulo=$num1%$num2;
            echo "<br>~Resta ".$num1." % ",$num2." = ".$modulo;
        }

        function mayorMenor($num1,$num2){
            echo "<h1>Igualación</h1>";

            if($num1 > $num2){
                echo "El numero ".$num1." es mayor a ".$num2;
            }else if($num1 < $num2){
                echo "El numero ".$num2." es mayor a ".$num1;
            }else{
                echo "El numero ".$num2." es igual a ".$num1;
            }
        }

        function parImpar($num1,$num2){
            echo "<h1>Par/Impar</h1>";

            if($num1%2 == 0){
                echo "El numero ".$num1." es Par<br>";
            }else{
                echo "El numero ".$num1." es Impar<br>";
            }
            if($num2%2 == 0){
                echo "El numero ".$num2." es Par";
            }else{
                echo "El numero ".$num2." es Impar";
            }

        }


?>