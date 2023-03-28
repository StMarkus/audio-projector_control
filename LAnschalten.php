<?php
$info = exec("sudo python3 /var/www/Lautsprecher/CheckL.py");
$an = "an";
$aus = "aus";
if($aus == $info){
	echo shell_exec("sudo python3 /var/www/Lautsprecher/on.py");
	echo "Es sollte jetzt angehen";
} else if($an == $info){
	echo shell_exec("sudo python3 /var/www/Lautsprecher/off2.py");
	echo "Es sollte jetzt ausgehen";
}
?>
