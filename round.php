<?php

class roundDecimal {

	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>Round to decimal digit precision</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Please type in a number:</h1>
				<form id='unit' method='post' action='index.php'>
					<input type='text' name='decimal' placeholder='Example: 12.45'>
					<input type='submit' name='submit' value='Go!'>
					<br>
				</form>
			</div>
		</body>
		</html>";

		if (isset($_POST['submit'])) {
			if (isset($_POST['decimal'])) {
				$decimal = round($_POST['decimal'], 2);
				echo "<br>" . $decimal;
			}
		}
	}
}

$roundDecimal = new roundDecimal();
$roundDecimal->displayPage();

