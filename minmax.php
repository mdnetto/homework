<?php

class minMaxMarks {

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
			<h1>Please type in your marks here:</h1>
				<form id='unit' method='post' action='minmax.php'>
					<input type='text' name='marks' placeholder='123, 123, 123'>
					<input type='submit' name='submit' value='Go!'><br>

				<div></div>
				</form>
			</div>
		</body>
		</html>";

		if (isset($_POST['submit'])) {
			if (isset($_POST['marks'])) {
				$marks = (explode(',', $_POST['marks']));
				foreach ($marks as $mark) {
					$mark = (trim($mark));
					if (!(ctype_digit($mark))) {
						echo "<br>Enter only digits please";
						return false;
					}
				}
				echo "<br>Max value is " . max($marks);
				echo "<br>Min value is " . min($marks);
			}
		}
	}
}

//remember to use your variable after you return it
$minMaxMarks = new minMaxMarks();
$minMaxMarks->displayPage();

