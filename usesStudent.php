<?php

require_once 'school.php';

$student = new Student('Michelle', 'D\'Netto' , '61-08-12', 'Remsen', 'Brooklyn', 'USA', '11201', '1234', 'Economics', '4');
$student1 = new Student('Mark', 'Galburger' , '61-08-12', 'Remsen', 'Brooklyn', 'USA', '11201', '4321', 'Mathematics', '1');

// $person = new Person('Michelle', 'D\'Netto' , '61-08-12', 'Remsen', 'Brooklyn', 'USA', '11201');
// $person = $person->showPerson();

$person_details = $student->showPerson();
$student_details = $student->showStudent();

$person1_details = $student1->showPerson();
$student1_details = $student1->showStudent();

echo "
<html>
<head>
<title>Person</title>
</head>
<body>
<div>
	<br>$person</br>
</div>
</body>
</html>";