/*<?php
global $info;
$info = exec("sudo python3 /home/pi/Lautsprecher/CheckL.py");
echo $info;
?>

<script>
*/
$('#contentStart').delay(0).fadeIn(0);

function Start() {
    $.get("Anschalten.php");
    return false;
}

function Anschalten() {
    $.get("Anschalten.php");
    return false;
}

function Ausschalten() {
    $.get("Ausschalten.php");
    return false;
}

function LAnschalten() {
    $.get("lan.php");
    document.getElementById("speaker").className = "backboxon";
    
}

function LAusschalten() {
    $.get("laus.php");
    return false;
}

function setOn() {
    //info = "<?php echo $info; ?>";
    document.getElementById("speaker").className = "backboxon";
    document.getElementById("speaker").onlick= typeof test;	
    
}


function setOff() {        
    document.getElementById("speaker").className = "backboxoff";	
}
//</script>






