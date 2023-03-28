<!doctype html>
<html>
<head>
	<title>Beamer Steuerung</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--<meta http-equiv="refresh" content="5" />
-->	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
</head>



	<body>	 

		
		
		
		<div id="content">
			<div id="contentStart" style="display:none;">
			<h2>Beamer الشاشة</h2>
				<span style="font-size:20px;color:00ff00;" id="addedalert"></span>
					<div id = "Beamer" onClick="Anschalten()" class="backboxon"></a></div>		
					<div id="checkB"></div>
					
					
					<?php
			global $infoB;
			$infoB = exec("sudo python3 /var/www/Beamer/CheckB.py");
			
			?>
			
			<h2>Lautsprecher Kirche السماعات في الكنيسة</h2>
					<span style="font-size:20px;color:00ff00;" id="addedalert"></span>
					<div id = "Lautsprecher" onClick="LAnschaltentest()" class="backboxon"></div>		
					<div id="checkL"></div>	
			
			<!--<h2>Lautsprecher außen السماعات الخارجية</h2>
					<span style="font-size:20px;color:00ff00;" id="addedalert"></span>
					<div id = "Lautsprecher" onClick="LAnschaltentest()" class="backboxon"></div>		
					<div id="checkL"></div>	-->
						

			</body>
			
			<?php
			//global $info;
			//info = exec("sudo python3 /home/stmarkus/Lautsprecher/CheckL.py");
			?> 
			
			<script>
					
				
				$(document).ready(function() {
                   $("#checkL").load("CheckL.php");
                   var classL = $('#checkL').val();

                   
                   var refreshId = setInterval(function() {
                      $("#checkL").load("CheckL.php");
                    var resultL = "default";
 
				// phpscript.php aufrufen über POST aufrufen
				// entspricht: ppscript.php?a=callDoAnything&b=[Inhalt von iofield]
				resultL = $.ajax({
				type: 'POST',
				async: false,   // WICHTIG! 
				url: 'classL.php',
				}).responseText;  

					
                   if(resultL == 1){ 					                                  
                   $('#Lautsprecher').removeClass();
                   $('#Lautsprecher').addClass("backboxoff");
					}
                    else if(resultL == 0){
                   $('#Lautsprecher').removeClass();
                   $('#Lautsprecher').addClass("backboxon");
					} 
					
					
                   }, 1000);
                });
                
                	$(document).ready(function() {
                   $("#checkB").load("CheckB.php");
                   var refreshId = setInterval(function() {
                      $("#checkB").load("CheckB.php");
                      
                      var resultB = "default";
 
				// phpscript.php aufrufen über POST aufrufen
				// entspricht: ppscript.php?a=callDoAnything&b=[Inhalt von iofield]
				resultB = $.ajax({
				type: 'POST',
				async: false,   // WICHTIG! 
				url: 'classB.php',
				}).responseText;  
				
				
					if(resultB == 1){ 					                                  
                   $('#Beamer').removeClass();
                   $('#Beamer').addClass("backboxoff");
					}
                    else if(resultB == 0){
                   $('#Beamer').removeClass();
                   $('#Beamer').addClass("backboxon");
					}
                      
                      
                   }, 1000);
                });
                
                $(document).ready(function() {
                   $("#Lautsprecher").load("textL.php");
                   var refreshId = setInterval(function() {
                      $("#Lautsprecher").load("textL.php");
                                          
                   }, 1000);
                });
                
                $(document).ready(function() {
                   $("#Beamer").load("textB.php");
                   var refreshId = setInterval(function() {
                      $("#Beamer").load("textB.php");
                   }, 1000);
                });
                
			$('#contentStart').delay(0).fadeIn(0);
			
			
			
			/* function Start() {
			$.get("Anschalten.php");
			return false;
			} */

			function Anschalten() {
			$.get("Anschalten.php");
			var info = "<?php echo $infoB ?>";
			alert("Der Beamer geht jetzt an/aus und der Vorgang ist in 2min Beendet");
			}		

			/* function Ausschalten() {
			$.get("Ausschalten.php");
			return false;
			}	*/

			function LAnschaltentest() {
			$.get("lan.php");
			var info = "<?php echo $infoL ?>";
			alert("Die Lautsprecher gehen jetzt an/aus");
			}

			/* function LAusschalten() {
			$.get("laus.php");
			
			
			} */
		

		
</script>
</html>


