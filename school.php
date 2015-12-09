<?php

require_once 'student.php';

class Person {

	public $firstName;
	public $lastName;
	public $dateOfBirth;
	public $addressStreet;
	public $addressTown;
	public $addressCountry;
	public $addressPostcode;

	public function __construct($firstName, $lastName, $dateOfBirth,
		$addressStreet, $addressTown, $addressCountry, $addressPostcode) {

		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->dateOfBirth = date($dateOfBirth);
		$this->addressStreet = $addressStreet;
		$this->addressTown = $addressTown;
		$this->addressCountry = $addressCountry;
		$this->addressPostcode = $addressPostcode;
	}

	public function setFirstName() {
		$this->firstName = $firstName;
	}

	public function setLastName() {
		$this->lastName = $lastName;
	}

	public function setDateOfBirth() {
		$this->firstName = $firstName;
	}

	public function setStreet() {
		$this->addressStreet = $addressStreet;
	}

	public function setTown() {
		$this->addressTown = $addressTown;
	}

	public function setCountry() {
		$this->addressCountry = $addressCountry;
	}

	public function setPostCode() {
		$this->addressPostcode = $addressPostcode;
	}


	public function getFirstName() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	public function getDateOfBirth() {
		return $this->firstName;
	}

	public function getStreet() {
		return $this->addressStreet;
	}

	public function getTown() {
		return $this->addressTown;
	}

	public function getCountry() {
		return $this->addressCountry;
	}

	public function getPostCode() {
		return $this->addressPostcode;
	}

	function showPerson() {
		return "<div>" .
			$this->getFirstName() .  " " .
			$this->getLastName() .  " " .
			$this->getDateOfBirth() .  " " .
			$this->getStreet() .  " " .
			$this->getTown() .  " " .
			$this->getCountry() .  " " .
			$this->getPostcode() .  " " .
		"</div>";
	}
}