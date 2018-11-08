<?php
	
	class Refueling {
		public $quantity=0;
		

		public function __construct(float $quantity) {
			$this->quantity = $quantity;
		}

		public function getQuantity() {
			return $this->quantity;
		}
	}

?>