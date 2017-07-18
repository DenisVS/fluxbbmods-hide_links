<?php
$to_link = $_GET["to"];
$to_partners = 'http://localhost/';


$pos = strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']);
if ($pos === false) {
		$to_partners = html_entity_decode($to_partners);
   		header("location:".$to_partners);
		exit(); 
}else {
	if($to_link != "")
	{
		$to_link = html_entity_decode($to_link);
		header("location:".$to_link);
		exit();
	}
}

?>
