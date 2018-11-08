<?php
	/*
	Class Refueling
	Getter and setter of new Car
	*/
	class Car {

		private $carName="";
		private $typeOfFuel="";
		private $mileage=0.0;

		public function __construct(string $carName, string $typeOfFuel, float $mileage) {

			$this->carName = $carName;
			$this->typeOfFuel = $typeOfFuel;
			$this->mileage = $mileage;

		}

		public function getCarName() {
			return $this->carName;
		}

		public function getTypeOfFuel() {
			return $this->typeOfFuel;
		}

		public function getMileage() {
			return $this->mileage;
		}

	}
?>