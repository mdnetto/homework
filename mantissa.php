<?php

class mantissa {
	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>Mantissa Problem</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Please type in a float number</h1>
				<form id='unit' method='post' action='mantissa.php'>
					<input type='text' name='float_num' placeholder='0.0456' required>
					<input type='submit' name='submit' value='Go!'>
					<br>
				</form>
			</div>
		</body>
		</html>";

		if (isset($_POST['submit'])) {
			if (isset($_POST['float_num']) && is_numeric($_POST['float_num'])) {
				$float_num = $_POST['float_num'];
				$exponent = (floor(log($float_num, 2)) + 1);
				$mantissa = ($float_num * pow(2, -$exponent));
				echo '<br>Floating value : '.$float_num.'<br>';
				echo 'Exponent part  : '.$exponent.'<br>';
				echo 'Mantissa part  : '.$mantissa.'<br>';
			} else {
				echo '<br>Please provide a float'.'<br>';
			}

		}
	}
}

$mantissa = new mantissa();
$mantissa->displayPage();