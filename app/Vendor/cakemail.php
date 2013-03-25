<?

function cakeMail($method, $action, $data) {

	$endpoint = "https://api.wbsrvc.com/$method/$action/";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint); 
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('apikey: 1b7dd4c9946f98ff900c2fdbab5fc292'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $result = curl_exec($ch);
    
    if ($result === false) {
    	unset($result);
    	echo 'Curl error: ' . curl_error($ch);
    }
    
    curl_close($ch);
    
    if (isset($result)) {
    	$json_object = json_decode($result, true);
    
    	if ($json_object['status'] == 'success') {
    		return $json_object['data'];
    	} else {
    		print_r($json_object);
    		return false;
    	}
    }
}

?>