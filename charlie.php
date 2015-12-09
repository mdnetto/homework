<?php

class Charlie {

	public function isBitten() {
		return mt_rand(0, 1);
	}

	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>Charlie</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body></body>
		</html>";

		if ($this->isBitten()) {
			echo "<h1>Charlie bit my finger!</h1>";
		} else {
			echo "<h1>Charlie did not bite my finger!</h1>";
		}
	}
}

$charlie = new Charlie();
$charlie->displayPage();



