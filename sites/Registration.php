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
						<input id="Passwort" name="Passwort" type="password" placeholder="Passwort" pattern=".{5,100}" required oninvalid="this.setCustomValidity('Das Passwort muss mindestens 6 Zeichen beinhalten')" /><br> <br> 
						<input id="Passwort_best�tigen" name="Passwort_best�tigen" type="password" placeholder="Passwort best&auml;tigen" pattern=".{6,100}" required oninvalid="this.setCustomValidity('Das Passwort muss mindestens 6 Zeichen beinhalten')"/><br><br> 
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
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>