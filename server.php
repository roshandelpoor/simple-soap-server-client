<?php

class serverApi
{
	public function __construct()
	{
		
	}
	
	public function getName()
	{
		return "hello ";
	}
	
	public function getFamily()
	{
		return "world!";
	}
	
}


$params = [
	"uri" => "http://localhost/soap-api/server.php",
];
$server = new SoapServer(NULL, $params);
$server->setClass('serverApi');
$server->handle();

?>