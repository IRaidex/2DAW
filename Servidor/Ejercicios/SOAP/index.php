<?php
$client = new SoapClient('http://localhost.servidor/wsdl/simple_service_definition.wsdl');
echo 'Funciones: <br>'
    ;var_dump($client->__getFunctions());
echo '<br><br>Tipos: <br>';var_dump($client->__getTypes());
?>