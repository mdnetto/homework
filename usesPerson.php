<?php

require_once 'student.php';

$person = new Person('Michelle', 'D\'Netto' , '61-08-12', 'Remsen', 'Brooklyn', 'USA', '11201');
$person1 = new Person('Mark', 'Galburger' , '61-08-12', 'Remsen', 'Brooklyn', 'USA', '11201');

$person = $person->showPerson();
$person1 = $person1->showPerson();

echo "
<html>
<head>
<title>Person</title>
</head>
<body>
<div>
	<br>$person</br>
	<br>$person1</br>
</div>
</body>
</html>";
