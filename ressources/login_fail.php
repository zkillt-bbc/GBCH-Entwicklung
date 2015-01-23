<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>GBCH - Registration / Login</title>
<link href="../css/Project.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<?php
	session_start ();
	require_once '../ressources/Menu_with_Banner.php';
	?>
	
	<!-- This file will be used if an error occured during login -->
	<div id="container">
		<div class=seite>
			<div class="registration">
			
				<!-- Formular for registration -->
				<div class=kontakt>Registration</div>
				<div class=formular>
					<form action="./ressources/eintragen.php" method="post">
						<input id="Username" name="Username" placeholder="Username"
							required /><br> <br> 
						<input id="Name" name="Name"
							placeholder="Nachname" required /><br> <br> 
						<input id="Vorname"
							name="Vorname" placeholder="Vorname" required /><br> <br> 
						<input
							id="Email" name="Email" type="email" placeholder="E-Mail"
							required /><br> <br> 
						<input id="Passwort" name="Passwort"
							type="password" placeholder="Passwort" required /><br> <br> 
						<input
							id="Passwort_bestätigen" name="Passwort_bestätigen"
							type="password" placeholder="Passwort best&auml;tigen" required /><br><br> 
						<input id="Geburtsdatum" name="Geburtsdatum" type="date"
							required><br> <br>
						<input id="submit" type="submit" name="submit"
							value="Registrieren" />
					</form>
				</div>
			</div>
			
			<!-- login formular -->
			<div class="login">
				<div class=kontakt>Login</div>
				<div class=formular>
					<form action="../ressources/login1.php" method="post">
						<input id="Username" name="Username" placeholder="Username"
							required /><br> <br> 
						<input id="Passwort" name="Passwort"
							type="password" placeholder="Passwort" required /><br> <br> 
						<input
							type="submit" value="Login" />
						
						<span class = "login_failed"><p>Login Fehlgeschlagen!</p></span>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
</html>