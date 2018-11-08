<?php
	require('class/classRefueling.inc');
	require('class/classCar.inc');
	require('class/classDB.inc');

	$Refueling = new Refueling(100.4, 10, 14,"Diesel");
	$Car = new Car("FordFocus", "Diesel", 154555);

	$DB = new DB();
	$DB->connect();


?>