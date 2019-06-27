<?php

class serverApi
{
	public function __construct()
	{
		
	}
	
	public function getName($str1, $str2)
	{
		return $str1.$str2. " hello ";
	}
	
	public function getFamily()
	{
		return "world!";
	}
	
}


$params = [
	"uri" => "http://localhost/soap-api/",
];
$server = new SoapServer(NULL, $params);
$server->setClass('serverApi');
$server->handle();

?>