<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>GBCH - Registration / Login</title>
<link href="../css/Project.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<?php
	session_start ();
	require_once '../ressources/Menu_with_Banner.php';
	?>
	<div id="container">
		<div class=seite>
			<div class="registration">
				<div class=kontakt>Registration</div>
				<div class=formular>
					<form action="../ressources/eintragen.php" method="post" accept-charset="ISO-8859-1">
						<input id="Username" type="text" name="Username" placeholder="Username (max. 16 Zeichen)" maxlength="16" required /><br> <br> 
						<input id="Name" name="Name" placeholder="Nachname" required /><br> <br> 
						<input id="Vorname" name="Vorname" placeholder="Vorname" required /><br> <br> 
						<input id="Email" name="Email" type="email" placeholder="E-Mail" required /><br> <br> 
						<input id="pass1" name="pass1" type="password" placeholder="Passwort" pattern=".{5,100}" required oninvalid="this.setCustomValidity('Das Passwort muss mindestens 6 Zeichen beinhalten')" /><br> <br> 
						<input id="pass2" name="pass2" type="password" placeholder="Passwort best&auml;tigen" pattern=".{5,100}" required oninvalid="this.setCustomValidity('Das Passwort muss mindestens 6 Zeichen beinhalten')" onkeyup="checkPass(); return false;"/> 
						<span id="confirmMessage" class="confirmMessage"></span><br><br>
						<input id="Geburtsdatum" name="Geburtsdatum" type="date" required><br> <br>
						<input id="submit" type="submit" name="submit" value="Registrieren" />		
					</form>
				</div>
			</div>
			<div class="login">
				<div class=kontakt>Login</div>
				<div class=formular>
					<form action="../ressources/login1.php" method="post" accept-charset="ISO-8859-1">
						<input id="Username" name="Username" placeholder="Username"
							required /><br> <br> 
						<input id="Passwort" name="Passwort"
							type="password" placeholder="Passwort" required /><br> <br> 
						<input type="submit" value="Login" />
					
					
					<script type="text/javascript"> 
					function checkPass()
					{
					    //Store the password field objects into variables ...
    					var pass1 = document.getElementById('pass1');
					    var pass2 = document.getElementById('pass2');
					    //Store the Confimation Message Object ...
					    var message = document.getElementById('confirmMessage');
					    //Set the colors we will be using ...
					    var goodColor = "#66cc66";
					    var badColor = "#ff6666";
					    //Compare the values in the password field 
					    //and the confirmation field
					    if(pass1.value == pass2.value){
					        //The passwords match. 
					        //Set the color to the good color and inform
					        //the user that they have entered the correct password 
					        //pass2.style.backgroundColor = goodColor;
					        message.style.color = goodColor;
					        message.innerHTML = ""
					    }else{
					        //The passwords do not match.
					        //Set the color to the bad color and
					        //notify the user.
					        //pass2.style.backgroundColor = badColor;
					        message.style.color = badColor;
					        message.innerHTML = "Passwords Do Not Match!"
					    }
					}
					</script>
					
					
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>