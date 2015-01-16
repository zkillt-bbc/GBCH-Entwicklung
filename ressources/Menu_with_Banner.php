<?php
$register = "<text>" . "registrieren / login" . "</text>";
?>

<html>
<head>
<meta charset="UTF-8">
<title>GBCH - League of Legends</title>
<link href="ressources/Project.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<!-- if user is not logged in -->
	<?php
	error_reporting ( 0 );
	if ($_SESSION ["logedin"] == false) {
		?>
		
	<!-- Menu -->
	<div id="cssmenu">
		<ul>
			<li><a href="Index.php">Home</a>
			
			<li><a href="Games.php">Games</a>
				<ul>
					<li><a href="#">Borderlands: The Pre Sequel</a></li>
					<li><a href="#">Deadspace 3</a></li>
					<li><a href="League_of_Legends.php">League of Legends</a></li>
				</ul></li>

			<li><a href="#">Special</a></li>
			<li><a href="#">Sprecher</a>
				<ul>
					<li><a href="#">Nova</a></li>
					<li><a href="#">Lulu</a></li>
					<li><a href="#">Samu</a></li>
				</ul></li>

			<li><a href="../sites/Kontakt.php">Kontakt</a>
			
			<li><a href="Registration.php"><span class="register">Register /
						Login</span></a></li>

		</ul>
	</div>

	<!-- if user is logged in -->
	<?php
	} else {
		$username = $_SESSION ['Username'];
		?>
	<!-- Menu -->
	<div id="cssmenu">
		<ul>

			<li><a href="Games.php">Games</a>
				<ul>
					<li><a href="#">Borderlands: The Pre Sequel</a></li>
					<li><a href="#">Deadspace 3</a></li>
					<li><a href="League_of_Legends.php">League of Legends</a></li>
				</ul></li>

			<li><a href="#">News</a></li>
			<li><a href="#">Special</a></li>

			<li><a href="#">Spieler</a>
				<ul>
					<li><a href="#">Nova</a></li>
					<li><a href="#">Lulu</a></li>
					<li><a href="#">Samu</a></li>
				</ul></li>

			<li><a href="Kontakt.php">Kontakt</a>
			
			<li><a href="Registration.php"><span class="register"><?php echo $username ?></a></li>

		</ul>
	</div>
	<?php }?>
</body>
</html>