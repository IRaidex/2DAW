<?php
 /*'Autor: Alejandro Salcedo <br>'.*/
/**
 * Methods of our simple SOAP service.
 */
class SimpleSoapServer {

    public function suma($num1, $num2){
        $suma = $num1+$num2;

        return $suma;
    }

    public function resta($num1, $num2){
        $resta = $num1-$num2;

        return 'Autor: Alejandro Salcedo <br>'.$resta;
    }

    public function dividir($num1, $num2){
        $dividir = $num1/$num2;

        return 'Autor: Alejandro Salcedo <br>'.$dividir;
    }

    public function multiplicar($num1, $num2){
        $multiplicar = $num1*$num2;

        return 'Autor: Alejandro Salcedo <br>'.$multiplicar;
    }   

    public function raiz($num1){
        $raiz = sqrt($num1)

            return 'Autor: Alejandro Salcedo <br>'.$raiz;
    }    

    public function coseno($num1){
        $coseno = cos($num1);

        return 'Autor: Alejandro Salcedo <br>'.$coseno;
    }   

    public function seno($num1){
        $seno = sin(num1)

            return 'Autor: Alejandro Salcedo <br>'.$seno;
    }  

    public function tangente($num1){
        $tangente = tan(num1);

        return 'Autor: Alejandro Salcedo <br>'.$tangente;
    }



}
