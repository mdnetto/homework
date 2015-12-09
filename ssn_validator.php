<?php

class ssnValidator {

	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>SSN Valiator</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Please type in your ssn</h1>
				<form id='unit' method='post' action='ssn_validator.php'>
					<input type='number' name='three' size='3' placeholder='111' required>-
					<input type='number' name='two' size='2' placeholder='11' required>-
					<input type='number' name='four' size='4' placeholder='1111' required>
					<input type='submit' name='submit' value='Go!'>
					<br>
				</form>
			</div>
		</body>
		</html>";

		if (isset($_POST['submit'])) {
			$three = ($_POST['three']);
			$two = ($_POST['two']);
			$four = ($_POST['four']);

			if (strlen($three) != 3 ) {
				echo "<br> The first two numbers are not valid </div>";
			} elseif (strlen($two) != 2 ) {
				echo "<br> The three middle numbers are not valid </div>";
			} elseif (strlen($four) != 4 ) {
				echo "<br> The last four numbers are not valid </div>";
			} else {
				echo "<br> That seems valid </div>";
			}
		}
	}
}

$isValidSSN = new ssnValidator();
$isValidSSN->displayPage();