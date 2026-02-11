<?php
	$w = $_POST["weight"];
	$h = $_POST["height"];
	$bmi =$w/($h*$h);
	echo "ค่า BMI ของคุณคือ".$bmi;
?>