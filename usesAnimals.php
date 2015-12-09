<?php

include_once 'Birds.php';

$bird = new Birds('Fluffy', '10', 'July 20, 2012', 'cockatoo');

$animal = $bird->showAnimalDetails();
$bird = $bird->showBirdDetails();

echo "
<html>
<head>
<title>Animals</title>
</head>
<body>
<div>
	<br>$animal, $bird</br>
</div>
</body>
</html>";
