<?php

class fiveLetters {

	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>Array Sort</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Enter some numbers to sort:</h1>
				<form id='unit' method='post' action='array_sort.php'>
					<input type='text' name='numbers'>
					<input type='submit' name='submit' value='Go!'>
					<br>
				</form>
			</div>
		</body>
		</html>";

		if (isset($_POST['submit'])) {
			if (isset($_POST['numbers'])) {
				$numbers = (trim($_POST['numbers']));
				$numbers = explode(',', $_POST['numbers']);
				if (array_filter($numbers, 'is_numeric')) {
					$sorted = sort($numbers);
					echo "<br>Sorted array is: ";
					foreach($numbers as $number) {
						echo "$number, ";
					}
				} else {
					echo "<br>Please enter numbers only";
				}
			}
		}
	}
}


$letters = new fiveLetters();
$letters->displayPage();
