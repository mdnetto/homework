<?php

class minMaxDates {

	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>Find earliest and latest dates</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Enter your dates in here</h1>
				<form id='dates' method='post' action='dates.php'>
					<input type='text' name='dates' placeholder='mm/dd/yyyy'>
					<input type='submit' name='submit' value='Go!'><br>

				<div></div>
				</form>
			</div>
		</body>
		</html>";

		if (isset($_POST['submit'])) {
			if (isset($_POST['dates'])) {
				$dates = (explode(',', $_POST['dates']));
				$timestamps = array();
				foreach ($dates as $date) {
					$date = (trim($date));
					$date = intval($this->getDateTime($date));
					array_push($timestamps, $date);
				}
				$max = max($timestamps);
				$min = min($timestamps);
				$earliest = $this->setDateTime($max);
				$latest = $this->setDateTime($min);
				echo "<br>Earliest date is " . $earliest;
				echo "<br>Latest date is " . $latest;
			}
		}
	}

	public function getDateTime($date) {
		$dt = DateTime::createFromFormat('d/m/Y', $date);
		return $dt->getTimestamp();
	}

	public function setDateTime($timestamp) {
		$dt = new DateTime();
		$dt = $dt->setTimestamp($timestamp); //<--- Pass a UNIX TimeStamp
		return $dt->format('d/m/Y');
	}

}

$string = "30/07/1980, 23/10/1979, 13/07/1977, 21/03/1948";
//remember to use your variable after you return it
$minMaxDates = new minMaxDates();
$minMaxDates->displayPage();

