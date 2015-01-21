<?php
require_once 'Menu_with_Banner.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>GBCH - Kontakt</title>
<link href="../css/Project.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div id="container">
		<div class = seite>
			<div class = "registration">
				<div class = kontakt>
					<newsTitle>Registration</newsTitle>
				</div>
			<div class = formular>
				<form action="eintragen.php" method="post">
					<input id="Username" name="Username" placeholder="Username" required/><br><br>
					<input id="Name" name="Name" placeholder="Nachname" required/><br><br>
					<input id="Vorname" name="Vorname" placeholder="Vorname" required/><br><br>
					<input id="Email" name="Email" type="email" placeholder="E-Mail" required/><br><br>
					<input id="Passwort" name="Passwort" type="password" placeholder="Passwort" required/><br><br>
					<input id="Passwort_bestätigen" name="Passwort_bestätigen" type="password" placeholder="Passwort best&auml;tigen" required/><br><br>
					<input id ="Geburtsdatum" name="Geburtsdatum" type="date" required><br><br>
					<input id ="submit" type="submit" name="submit" value="Registrieren"/>
				</form>
			</div>
		</div>
		<div class = "login">
			<div class = kontakt>
				<newsTitle>Login</newsTitle>
			</div>
			<div class = formular>
				<form action="login1.php" method="post">
					<input id="Username" name="Username" placeholder="Username" required/><br><br>
					<input id="Passwort" name="Passwort" type="password" placeholder="Passwort" required/><br><br>		
					<input type="submit" value="Login"/>
					<span class = "login_failed"><p>Login Fehlgeschlagen!</p></span>
				</form>
			</div>
		</div>
	</div>
</body>
</html>