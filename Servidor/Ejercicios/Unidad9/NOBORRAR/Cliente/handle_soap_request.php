<?php

require_once('simple_soap_client_class.php');

// GET parameter definition.
define('SUMA', 'suma');
define('RESTA', 'resta');
define('DIVIDE', 'dividir');
define('MULTIPLICAR', 'multiplicar');
define('RAIZ', 'raiz');
define('SENO', 'seno');
define('COSENO', 'coseno');
define('TANGENTE', 'tangente');
define('VALOR1', 'num1');
define('VALOR2', 'num2');


// Server location definition.
define('LOCATION', 'http://localhost.servidor/no_wsdl/server_endpoint.php');

// Function definitions.

/**
 * Checks if the given parameters are set. If one of the specified parameters is not set,
 * die() is called.
 *
 * @param $parameters The parameters to check.
 */
function checkGETParametersOrDie($parameters) {
    foreach ($parameters as $parameter) {
        isset($_GET[$parameter]) || die("Please, provide '$parameter' parameter.");
    }
}

/**
 * Instantiates the SOAP client, setting the server location, depending on the mode.
 * If any error occurs, the page will die.
 *
 * @param $mode The SOAP mode, 'wsdl' or 'no_wsdl'.
 * @return SoapClient class instance.
 */
function instantiateSoapClient() {

    try {
        $soapClient = new SimpleSoapClient(LOCATION);
    } catch (Exception $exception) {
        die('Error initializing SOAP client: ' . $exception->getMessage());
    }

    return $soapClient;
}

// Flow starts here.

checkGETParametersOrDie(['action']);


$action = $_GET['action'];
checkGETParametersOrDie([VALOR1, VALOR2]);
$value1 = $_GET['num1'];
$value2 = $_GET['num2'];  
$soapClient = instantiateSoapClient();

switch($action) {

    case SUMA:

        try {
            $response = $soapClient->suma($value1, $value2);
            echo "Autor: Alejandro Salcedo Santamaria <br><br>";
            echo "La suma de $value1 + $value2 = $response<br>";
        } catch (Exception $exception) {
            die('Error inserting into SOAP servicesdfsd: ' . $exception->getMessage());
        }

        break;

    case RESTA:

        try {
            $response = $soapClient->resta($value1, $value2);
            echo "Autor: Alejandro Salcedo Santamaria <br><br>";
            echo "La resta de $value1 - $value2 = $response<br>";
        } catch (Exception $exception) {
            die('Error inserting into SOAP servicesdfsd: ' . $exception->getMessage());
        }

        break;

    case DIVIDE:

        try {
            $response = $soapClient->divide($value1, $value2);
            echo "Autor: Alejandro Salcedo Santamaria <br><br>";
            echo "La division de $value1 / $value2 = $response<br>";
        } catch (Exception $exception) {
            die('Error inserting into SOAP servicesdfsd: ' . $exception->getMessage());
        }

        break;

    case MULTIPLICAR:

        try {
            $response = $soapClient->multiplicar($value1, $value2);
            echo "Autor: Alejandro Salcedo Santamaria <br><br>";
            echo "La multiplicacion de $value1 * $value2 = $response<br>";
        } catch (Exception $exception) {
            die('Error inserting into SOAP servicesdfsd: ' . $exception->getMessage());
        }

        break;    

    case RAIZ:

        try {
            $response = $soapClient->raiz($value1);
            echo "Autor: Alejandro Salcedo Santamaria <br><br>";
            echo "La raiz de $value1 = $response<br>";
        } catch (Exception $exception) {
            die('Error inserting into SOAP servicesdfsd: ' . $exception->getMessage());
        }

        break;

    case SENO:

        try {
            $response = $soapClient->seno($value1);
            echo "Autor: Alejandro Salcedo Santamaria <br><br>";
            echo "El seno de $value1 = $response<br>";
        } catch (Exception $exception) {
            die('Error inserting into SOAP servicesdfsd: ' . $exception->getMessage());
        }

        break;

    case COSENO:

        try {
            $response = $soapClient->coseno($value1);
            echo "Autor: Alejandro Salcedo Santamaria <br><br>";
            echo "El coseno de $value1 = $response<br>";
        } catch (Exception $exception) {
            die('Error inserting into SOAP servicesdfsd: ' . $exception->getMessage());
        }

        break;

    case TANGENTE:

        try {
            $response = $soapClient->tangente($value1);
            echo "Autor: Alejandro Salcedo Santamaria <br><br>";
            echo "La tangente de $value1 = $response<br>";
        } catch (Exception $exception) {
            die('Error inserting into SOAP servicesdfsd: ' . $exception->getMessage());
        }

        break;

    default:
        die('Invalid "action" specified.');
        break;
}