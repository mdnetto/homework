<?php

class Animals {

	public $name;
	public $age;
	public $date_arrived;

	public function __construct($name, $age, $date_arrived) {
		$this->name = $name;
		$this->age = $age;
		$this->date_arrived = $date_arrived;
	}

	public function getName() {
		return $this->name;
	}

	public function getAge() {
		return $this->age;
	}

	public function getDateArrived() {
		return $this->date_arrived;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setAge($age) {
		$this->age = $age;
	}

	public function setDateArrived() {
		$this->date_arrived = $date_arrived;
	}

	public function showAnimalDetails() {
		return "<div>" .
			$this->getName() .  " " .
			$this->getAge() .  " " .
			$this->getDateArrived() .  " " .
		"</div>";
	}
}