<?php
	if (isset($_GET["username"])) {
		$url = "https://www.instagram.com/" . $_GET["username"] . "/?__a=1";
    	$json = file_get_contents($url);
    	echo curl_error($curl);
    	curl_close ($curl);
   		// print $result;
   	 	$res= json_decode($json)->{'user'}->{'id'};
   		print($res);
	}
?>