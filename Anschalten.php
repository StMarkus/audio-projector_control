<?php
$info = exec("sudo python3 /var/www/Beamer/CheckB.py");
$an = "an";
$aus = "aus";
if($aus == $info){
	echo shell_exec("sudo python3 /var/www/Beamer/on2.py");
} else if($an == $info){
	echo shell_exec("sudo python3 /var/www/Beamer/off2.py");
}
?>
