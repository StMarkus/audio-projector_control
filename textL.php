<?php
$info = exec("sudo python3 /var/www/Lautsprecher/CheckL.py");
$test = "Ausschalten/ غلق";
$aus = "Anschalten/ فتح";
if($info == "an"){
	echo $test;
}
if($info == "aus"){
	echo $aus;
}
?> 
