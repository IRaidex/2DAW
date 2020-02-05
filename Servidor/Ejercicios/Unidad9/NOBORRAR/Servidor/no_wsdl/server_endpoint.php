<?php

require_once('../simple_soap_server_class.php');

$options = array('uri' => 'http://localhost.servidor' . $_SERVER['PHP_SELF']);

$server = new SoapServer(NULL, $options);
$server->setClass('SimpleSoapServer');
$server->handle();

