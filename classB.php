<?php
$info = exec("sudo python3 /var/www/Beamer/CheckB.py");
if($info == "an"){
$test = 1;
echo $test;
}
else if($info == "aus"){
$test = 0;
echo $test;	
	}
?> 
