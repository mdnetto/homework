<?php

class bankBalancer {

	public function getNewBalance() {
		return mt_rand(0, 999999)/100;
	}

	public function displayPage($balance) {

		$new_balance = 0;
		if (isset($_POST['submit'])) {
			$submit = $_POST['submit'];
			if (isset($_POST['action']) && isset($_POST['amount'])) {
				$action = $_POST['action'];
				$amount = $_POST['amount'];

				if ($action == "deposit") {
					$new_balance = $balance + $amount;
				} else {
					$new_balance = $balance - $amount;
				}
				echo "Your new balance is $" . $new_balance . " after the $action";

			} else {
				echo "You need to set an action or amount";
			}
		} else {
			echo "Please make a selection";
		}

		echo
		"<!DOCTYPE html>
		<head>
		<title>Bank Balance</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Your current balance is $$balance
				<br>What would you like to do today?</h1>
				<form id='unit' method='post' action='new_balance.php?new_balance=$new_balance'>
					<div>
						<input type='radio' name='action' value='deposit'>Deposit
						<input type='radio' name='action' value='withdrawal'>Withdraw
					</div>
					<br>
					<div> Amount <input type='text' name='amount'><br></div><br>
					<input type='submit' name='submit' value='Go!'><br>
					<br>
				</form>
			</div>
		</body>
		</html>";

		//this doesn't work as expected
		// old balances still displays
		// the new balance persists from the last check
	}
}

$bankBalance = new bankBalancer();
$balance = $bankBalance->getNewBalance();
$bankBalance->displayPage($balance);
