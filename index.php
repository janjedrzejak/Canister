<?php
	include('class/classRefueling.php');

	$Refueling = new Refueling(100.4, 10, 14,"Diesel");
	
	echo $Refueling->getQuantity();
	echo $Refueling->getMileage();
	echo $Refueling->getTypeOfFuel();
?>