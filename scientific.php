<?php

class scientificNotation {

	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>Scientific Notation</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Type in a Scientfic Notation Number:</h1>
				<form id='unit' method='post' action='scientific.php'>
					<input type='text' name='sci_number' placeholder='4.5e3'>
					<input type='submit' name='submit' value='Go!'><br>

				<div></div>
				</form>
			</div>
		</body>
		</html>";

		if (isset($_POST['submit'])) {
			$sci_number = $_POST['sci_number'];
			if (isset($_POST['sci_number'])) {
				$sci_number = $_POST['sci_number'];
				$e = strpos($sci_number, 'e');
				if ($e === false) {
					echo "<br>Please enter a scientific number, you goose";
				} else {
					echo "<br><br> Scientific Notation: $sci_number";
					echo "<br><br> Integer: " . (int)($sci_number);
					echo "<br><br> Float: " . (float)($sci_number);
				}
			}
		}
	}
}

//remember to use your variable after you return it
$scientificNotation = new scientificNotation();
$scientificNotation->displayPage();

