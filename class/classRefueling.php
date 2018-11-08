<?php
	/*
	Class Refueling
	Getter and setter of new Refueling
	*/
	
	class Refueling {

		private $quantity=0;
		private $price=0;
		private $mileage=0;
		private $typeOfFuel="";


		public function __construct(float $quantity, float $price, float $mileage, string $typeOfFuel) {

			$this->quantity = $quantity;
			$this->price = $price;
			$this->mileage = $mileage;
			$this->typeOfFuel = $typeOfFuel;
		}

		public function getQuantity() {
			return $this->quantity;
		}
		public function getPrice() {
			return $this->price;
		}
		public function getMileage() {
			return $this->mileage;
		}
		public function getTypeOfFuel() {
			return $this->typeOfFuel;
		}
	}

?>