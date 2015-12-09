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

		if (isset($_POST['submit'])) {
			$word = ($_POST['word']);
			if (is_numeric($word)) {
				echo "Please give me a word";
			} elseif (strlen($word) <= 5) {
				echo "<div class='blue'>";
			} else {
				echo "<div class='yellow'>";
			}
			echo "<br>" . $word . "</div>";
		}
	}
}


$letters = new fiveLetters();
$letters->displayPage();
