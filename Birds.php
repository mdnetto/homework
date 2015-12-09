<?php

include_once 'Animals.php';

class Birds extends Animals {

	public $bird_type;

	public function __construct($name, $age, $date_arrived, $bird_type) {
		parent::__construct($name, $age, $date_arrived);
		$this->bird_type = $bird_type;
	}

	public function getBirdType() {
		return $this->bird_type;
	}


	public function setDateArrived() {
		$this->bird_type = $bird_type;
	}

	public function showBirdDetails() {
		return "<div>" .
			$this->getBirdType() .  " " .
		"</div>";
	}
}