<?php

include_once "school.php";

class Student extends Person {

	public $kuID;
	public $courseName;
	public $currentYear;

	public function __construct($firstName, $lastName, $dateOfBirth, $addressStreet,
		$addressTown, $addressCountry, $addressPostcode, $kuID, $courseName, $currentYear) {

		// parent::__construct($firstName, $lastName, $dateOfBirth, $addressStreet,
		// 	$addressTown, $addressCountry, $addressPostcode);

		$this->kuID = $kuID;
		$this->courseName = $courseName;
		$this->currentYear = $currentYear;
	}

	public function setkuID($kuID) {
		$this->kuID = $kuID;
	}

	public function setCourseName($courseName) {
		$this->courseName = $courseName;
	}

	public function setCourseYear($courseYear) {
		$this->courseYear = $courseYear;
	}

	public function getkuID() {
		return $this->kuID;
	}

	public function getCourseName() {
		return $this->courseName;
	}

	public function getCurrentYear() {
		return $this->currentYear;
	}

	function showStudent() {
		return "<div>" .
			$this->getkuID() .  " " .
			$this->getCourseName() .  " " .
			$this->getCurrentYear() .  " " .
		"</div>";
	}
}