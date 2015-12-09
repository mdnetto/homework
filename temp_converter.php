<?php

class convertTemp {

	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>Temperature Conversion</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Convert temperature</h1>

				<form id='unit' method='post' action='index.php'>
					<input type='text' name='temperature'>
					<select name='unit'>
						<option value='fToC'>&#176;F to &#176;C</option>
						<option value='cToF'>&#176;C to &#176;F</option>
					</select>
					<input type='submit' name='submit' value='GO!'>
					<br>
				</form>
			</div>
		</body>
		</html>";

		if (isset($_POST['submit'])) {
			$selected_unit = $_POST['unit'];
			$temp = ($_POST['temperature']);
			if (is_null($temp) || !(is_numeric($temp)))
			{
				echo "<br>Enter a valid temperature value";
			} else {
			 	if ($_POST['unit'] == 'fToC') {
			 		$celcius = $this->convertF2C($temp);
			 		echo"<br> $temp &#176;F is " . $celcius . " &#176;C";
			 	} else {
			 		$faren = $this->convertC2F($temp);
			 		echo"<br> $temp &#176;C is " . $faren . " &#176;F";
			 	}
			}
		}
	}

	public function convertF2C($temp) {
		$f2c_temp = round((($temp - 32) * 5) /9);
		return $f2c_temp;
	}

	public function convertC2F($temp) {
		$c2f_temp = round((($temp * 9) /5) + 32);
		return $c2f_temp;
	}
}

$converter = new convertTemp();
$converter->displayPage();

