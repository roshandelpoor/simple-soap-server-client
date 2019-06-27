<?php

class classClient
{
	public function __construct()
	{
		$params = [
			"location" => "http://localhost/soap-api/server.php",
			"uri"      => "http://localhost/soap-api/server.php",
			"trace"    => 1,
		];
		
		$this->instance = new SoapClient(NULL, $params);
		
	}
	
	public function getNameAsServerSoap()
	{
		$name   = $this->instance->__soapCall('getName', []);
		$family = $this->instance->__soapCall('getFamily', []);
		
		return $name . "-" . $family;
	}
	
}

// url on browser
// http://localhost/soap-api/client.php

$client = new classClient();
echo $client->getNameAsServerSoap();

?>