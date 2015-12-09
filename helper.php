<?php

class myCalculator {

	public function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}

	public function add() {
		return ($this->x) + ($this->y);
	}

	public function subtract() {
		return ($this->x) - ($this->y);
	}

	public function multiply() {
		return ($this->x) * ($this->y);
	}

	public function divide() {
		return ($this->x) / ($this->y);
	}

	public function getResult($operation) {
		if ($operation == 'add') {
			return $this->add();
		} elseif ($operation == 'subtract') {
			return $this->subtract();
		} elseif ($operation == 'multiply') {
			return $this->multiply();
		} else {
			return $this->divide();
		}
	}
}

echo "
<!DOCTYPE html>
	<head>
	<title>Array Sort</title>
	<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
	<link href='css/styles.css' rel='stylesheet' />
	</head>
	<body>
		<div>
		<h1>Enter some numbers to sort:</h1>
			<form id='unit' method='post' action='helper.php'>
				<input type='number' name='x'>
				<input type='number' name='y'>
				<select name='operation'>
                    <option value='add'>Add</option>
                    <option value='subtract'>subtract</option>
                    <option value='multiply'>Multiply</option>
                    <option value='divide'>Divide</option>
                </select>
				<input type='submit' name='submit' value='Go!'>
				<br>
			</form>
		</div>
	</body>
</html>
";

if (isset($_POST['submit'])) {
	$x = ($_POST['x']);
	$y = ($_POST['y']);
	$operation = $_POST['operation'];
	$mycalc = new MyCalculator($x, $y);
	$result = $mycalc->getResult($operation);
	echo "<br>Result is: $result";
}