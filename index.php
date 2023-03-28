<?php 

$IP = $_SERVER['REMOTE_ADDR'];
if ($IP != "192.168.178.118"and $IP != "192.168.178.197")	 {
 echo "<h1>Zugriff Verweigert</h1>";
 echo "<h2>Bei Problemen bitte bei der Technik melden.</h2>";
 echo "<h2>Danke</h2>";
 
} else { 
	include 'haupt.php';
} 
?>
