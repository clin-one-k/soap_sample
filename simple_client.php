<?php
/**
 * A code sample for web service with SOAP
 * http://www.ibm.com/developerworks/opensource/tutorials/os-php-webservice/
 * using PHP built-in SoapClient class
 * client example
 * 2014/04/27
 */

// debug
ini_set ( 'display_errors', 1 );
ini_set ( 'display_startup_errors', 1 );
error_reporting ( -1 );

// get input and set 
if(isset(  $_GET['input'] )){
    $user_input = $_GET['input'];
}else{
    $user_input = "Type something here.";
}

$SOAPresult = "";

if( $user_input != ""){
    $client = new SoapClient(
        null, 
        array(
            // where is server is
            "location" => "http://localhost/ws/simple_server.php",
            // need a URI if no WSDL is given
            "uri"=> "http://localhost/ws/simple_client.php"
        )
    );
    // call and get response
    $SOAPresult = $client->
        __soapCall( "echo_back", array( $user_input ));
}
?>
<!DOCTYPE html>
<head>
    <title>SOAP Client Example</title>
</head>
<body>
<h1>SOAP Client Example</h1>
<h2>The server will echo back what you typed.</h2>
<form action = "simple_client.php" method = "GET"/>
    <input name = "input" value= "<?php echo $user_input?>"><br/>
    <input type = "Submit" name = "submit" value = "Send"/>
</form>
<?php echo $SOAPresult;?>
</body>
</html>
