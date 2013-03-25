<?

function avid($username, $password, $customerid, $controller, $action, $arguments, $admin = 0) {
	
	require_once("MCSOAPClient.php");

	$ServiceUrl = "https://login.avidmobile.com/MCSOAP2.1/MarketingCenter2-1.php?wsdl";
    $MCUsername = $username; //REPLACE WITH: Your customer username
    $MCPassword = $password; //REPLACE WITH: Your customer password
    $MCCustomerId = $customerid; //REPLACE WITH: Your customer id

	if ($admin == 1) {
	
	    $MySOAPClient = new AvidMobileSOAPClient($ServiceUrl, $MCUsername, $MCPassword, $MCCustomerId, 1);
	
	}
	else {

	    $MySOAPClient = new AvidMobileSOAPClient($ServiceUrl, $MCUsername, $MCPassword, $MCCustomerId);
			
	}
	
	$result = $MySOAPClient->DoWebService("Put", $MySOAPClient->CreateWebServiceParams($controller.'.'.$action, $arguments));	
				
	if ($result->ErrorCode != 0) {echo $result->ErrorDetails; return false;}
	
	return $result->ErrorDetails;
	
}

?>