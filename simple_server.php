<?php
/**
 * A code sample for web service with SOAP
 * http://www.ibm.com/developerworks/opensource/tutorials/os-php-webservice/
 * using PHP built-in SoapServer class
 * server example
 */

/*
 * This is where the business logic goes
 */
function echoo($echo){

    return "This is soap server: you typed ".$echo;
}

$server = new SoapServer(
    null,
    array('uri' => "urn://tyler/res")
);
$server->addFunction('echoo');
$server->handle();
?>