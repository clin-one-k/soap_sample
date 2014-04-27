<?php
/**
 * A code sample for web service with SOAP
 * http://www.ibm.com/developerworks/opensource/tutorials/os-php-webservice/
 * using PHP built-in SoapServer class
 * server example
 * 2014/04/27
 */

/*
 * This is where the business logic goes
 * Define a custom function
 */
function echo_back($user_input){

    return "This is soap server: you typed <b>".$user_input."</b>.";
}

/*
 * Initial Sopa server
 */ 
$server = new SoapServer(
    null,
    // may not need this uri
    array("uri" => 'http://localhost/soap/server.php')
);
// add the custom function
$server -> addFunction( 'echo_back' );
// start service
$server -> handle();
?>
