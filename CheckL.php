<?php
global $info;
$info = shell_exec("sudo python3 /var/www/Lautsprecher/CheckL.py 2>&1");
echo "Lautsprecher sind: ";
echo $info;
?> 
