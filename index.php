<?php

class emailValidation {

	public function displayPage() {
		echo
		"<!DOCTYPE html>
		<head>
		<title>Email Validator</title>
		<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
		<link href='css/styles.css' rel='stylesheet' />
		</head>
		<body>
			<div>
			<h1>Please type in your email address</h1>
				<form id='unit' method='post' action='index.php'>

					<!--type='email' does client side validation
						not sure what required does-->

					<input type='email' name='email' placeholder='Example: your_name@gmail.com' required>
					<input type='submit' name='submit' value='Go!'>
					<br>
				</form>
			</div>
		</body>
		</html>";

		if (isset($_POST['submit'])) {
			$email = ($_POST['email']);

			// does server side validation but doesn't
			// run because client side validation blocks it
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<br>" . $email . " is a valid address</div>";
			} else {
				echo "<br>" . $email . " is not valid. Try again.";
			}
		}
	}
}

$isEmailValid = new emailValidation();
$isEmailValid->displayPage();