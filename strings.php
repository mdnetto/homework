<?php

class stringGenerator {

	public function generateRandomString($length = 11) {
	    $valid_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	    $charactersLength = strlen($valid_chars);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $valid_chars[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	public function displayPage($string) {
		echo
		"<!DOCTYPE html>
		<head>
		<title>String Generator</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Here is your random string:</h1>
				<form id='unit' method='post' action='index.php'>
				<div>$string</div>
				</form>
			</div>
		</body>
		</html>";
	}
}
//remember to use your variable after you return it
$stringGenerator = new stringGenerator();
$string = $stringGenerator->generateRandomString();
$stringGenerator->displayPage($string);