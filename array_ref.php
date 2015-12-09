<?php

class fiveLetters {

	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>5 letters</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Enter a word</h1>
				<form id='unit' method='post' action='5letters.php'>
					<input type='text' name='word'>
					<input type='submit' name='submit' value='Go!'>
					<br>
				</form>
			</div>
		</body>
		</html>";

		$a = array('zero', 'one', 'two');
		  foreach ($a as &$v) {
		  	print_r($a);
		  }
		  foreach ($a as $v) {
		  	print_r($a);
		  }


	}
}


$letters = new fiveLetters();
$letters->displayPage();
