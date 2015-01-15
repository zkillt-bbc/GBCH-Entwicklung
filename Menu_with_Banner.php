<?php 
$register = "<text>" . "registrieren / login" . "</text>";
?>
<html>
<head>
<meta charset="UTF-8">
<title>GBCH - League of Legends</title>
<link href="Project.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<?php if (!$_SESSION["logedin"]) {?>
	<div id="container">
		<div id="logo">
			<a href="index.php"><img alt="GBCH-Banner" src="Bilder\GBCH_Banner.png"></a>
		</div>
		<div id="menu">
			<ul>
				<li><a href="Games.php">Games</a>
					<ul>
						<li><a href="http://www.gbch.ch/games/borderlands_the_pre_sequel"> Borderlands: The Pre Sequel</a></li>
						<li><a href="http://www.gbch.ch/games/deadspace_3">Deadspace 3</a></li>
						<li><a href="League_of_Legends.php">League of Legends</a></li>
					</ul>
				</li>
				<li><a href="http://www.gbch.ch/news">News</a></li>
				<li><a href="http://www.gbch.ch/specials">Special</a></li>
				<li><a href="http://www.gbch.ch/sprecher">Spieler</a>
					<ul>
						<li><a href="http://www.gbch.ch/sprecher/nova">Nova</a></li>
						<li><a href="http://www.gbch.ch/sprecher/lulu">Lulu</a></li>
						<li><a href="http://www.gbch.ch/sprecher/samu">Samu</a></li>
					</ul>
				</li>
				<li><a href="Kontakt.php">Kontakt</a>
				<li><a href="Registration.php"><span class = "anmeldung">Register / Login</span></a></li>
			</ul>
		</div>
	</div>
	<?php }?>

	<?php
	error_reporting(0);
	if ($_SESSION["logedin"] = true){
	$username = $_SESSION['Username'];
	?>
	<div id="container">
		<div id="logo">
			<a href="index.php"><img alt="GBCH-Banner" src="Bilder\GBCH_Banner.png"></a>
		</div>
		<div id="menu">
			<ul>
				<li><a href="Games.php">Games</a>
					<ul>
						<li><a href="http://www.gbch.ch/games/borderlands_the_pre_sequel"> Borderlands: The Pre Sequel</a></li>
						<li><a href="http://www.gbch.ch/games/deadspace_3">Deadspace 3</a></li>
						<li><a href="League_of_Legends.php">League of Legends</a></li>
					</ul>
				</li>
				<li><a href="http://www.gbch.ch/news">News</a></li>
				<li><a href="http://www.gbch.ch/specials">Special</a></li>
				<li><a href="http://www.gbch.ch/sprecher">Spieler</a>
					<ul>
						<li><a href="http://www.gbch.ch/sprecher/nova">Nova</a></li>
						<li><a href="http://www.gbch.ch/sprecher/lulu">Lulu</a></li>
						<li><a href="http://www.gbch.ch/sprecher/samu">Samu</a></li>
					</ul>
				</li>
				<li><a href="Kontakt.php">Kontakt</a>
				<li><a href="Registration.php"><span class = "anmeldung"><?php echo $username ?></span></a></li>
			</ul>
		</div>
	</div>
	<?php }?>
</body>
</html>