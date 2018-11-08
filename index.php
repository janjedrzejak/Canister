<?php
	include('class/classRefueling.php');

	$Refueling = new Refueling(100.4);
	echo $Refueling->getQuantity();
?>