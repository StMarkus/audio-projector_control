<?php
$info = exec("sudo python3 /var/www/Beamer/CheckB.py");
echo "Beamer ist: ";
echo $info;
?> 
