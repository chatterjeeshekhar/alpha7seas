<?php
$d = $_REQUEST;
$name = $d['name'];
$email = $d['email'];
$phone = $d['phone'];
$date = $d['date'];
$time = $d['time'];
$smsContent = "Alpha7Seas Trial Session Confirmed.".PHP_EOL."Date and Time: $date $time".PHP_EOL."Name: $name".PHP_EOL."Email: $email".PHP_EOL."Phone: $phone";
$smsAPIKey = "";
$mobile = "8866175570, $phone";
	
	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?country=91&sender=SMRTCZ&route=4&mobiles=".$mobile."&authkey=".$smsAPIKey."&message=".$smsContent,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_SSL_VERIFYHOST => 0,
	  CURLOPT_SSL_VERIFYPEER => 0,
	));    
	$response = curl_exec($curl);
	$err = curl_error($curl);    
	curl_close($curl);

if ($err) {
	echo makeJSON(203, "Sorry, We could not send confirmation to your phone");
} else {
	echo makeJSON(200, "We have sent a confirmation to your number");
}	
function makeJSON($status, $msg){
	return json_encode(array('status' => $status, 'msg' => $msg));
}