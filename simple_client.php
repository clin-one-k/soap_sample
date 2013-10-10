<?php
/**
 * A code sample for web service with SOAP
 * http://www.ibm.com/developerworks/opensource/tutorials/os-php-webservice/
 * using PHP built-in SoapClient class
 * client example
 */

// get input
$echo = $_GET['input'];
$result = "";

if($echo != ''){
    $client = new SoapClient(null, array(
      'location' => "http://localhost/ws/simple_server.php",
      'uri'      => "urn://tyler/req"));

    $result = $client->
        __soapCall("echoo",array($echo));
}
?>
<h2>Echo Web Service</h2>
<form action='simple_client.php' method='GET'/>
    <input name='input' value='$echo'/><br/>
    <input type='Submit' name='submit' value='Send'/>
</form>
<?php echo $result;?>
