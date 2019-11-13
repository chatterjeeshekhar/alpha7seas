<?php
$d = $_REQUEST;
$name = $d['name'];
$email = $d['email'];
$phone = $d['phone'];
$message = $d['message'];
$type = $d['type'];
$e = "";
$m = "";
switch($type){
	case 1:
		$e = "ask@alpha7seas.com";
		$m = "Membership Enquiry";
		break;
	case 2:
		$e = "ashish@alpha7seas.com";
		$m = "Business Enquiry";
		break;
	case 3:
		$e = "ashish@alpha7seas.com";
		$m = "Franchise Enquiry";
		break;
	default;
}
$e = "shekhar@orivin.com";
//echo "https://formspree.io/$e?name=$name&email=$email&phone=$phone&enqType=$m&message=$message";
$arrayName = array('type' => $m, 'myemail' => $e);
echo json_encode($arrayName);
?>
