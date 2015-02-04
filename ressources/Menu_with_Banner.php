<?php
$register = "<text>" . "registrieren / login" . "</text>";
?>

<html>
<head>
<meta charset="ISO-8859-1">
<title>GBCH - League of Legends</title>
<link href="css/Project.css" type="text/css" rel="stylesheet" />
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
			<!-- GBCH Banner vor dem Menuband -->
			<div id="logo">
				<a href="/GBCH-Entwicklung/index.php"><img alt="GBCH-Banner"
					src="/GBCH-Entwicklung/Bilder/banner_text.png" width="150px" height="50px" 
					height="65px"></a>
			</div>
			<li><a href="/GBCH-Entwicklung/sites/Games.php">Games</a>
				<ul>
					<li><a href="#">Borderlands: The Pre Sequel</a></li>
					<li><a href="#">Deadspace 3</a></li>
					<li><a href="/GBCH-Entwicklung/sites/League_of_Legends.php">League of Legends</a></li>
				</ul></li>

			<li><a href="#">Special</a></li>
			<li><a href="#">Sprecher</a>
				<ul>
					<li><a href="#">Nova</a></li>
					<li><a href="#">Lulu</a></li>
					<li><a href="#">Samu</a></li>
				</ul></li>

			<li><a href="/GBCH-Entwicklung/sites/Kontakt.php">Kontakt</a></li>
			<!-- 			<li><a href="Registration.php"><span class="register">Register / -->
			<!-- 						Login</span></a></li> -->
			<div class="login_home">
				<form action="/GBCH-Entwicklung/ressources/login1.php" method="post">
					<input id="Username" name="Username" placeholder="Username"
						size="15" required /> <input id="Passwort" name="Passwort"
						type="password" placeholder="Passwort" size="15" required />
					<span class="login_submit">
						<input type="submit" name="Submit_login" value="Login" />
					</span>
					<div class="kleiner_text">Klicke zum <a href="/GBCH-Entwicklung/sites/Registration.php">registrieren</a></div>
				</form>
			</div>
		
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
			<div id="logo">
				<a href="/GBCH-Entwicklung/index.php"><img alt="GBCH-Banner"
					src="/GBCH-Entwicklung/Bilder/banner_text.png" width="150px" height="50px"
					height="49px"></a>
			</div>
			<li><a href="/GBCH-Entwicklung/sites/Games.php">Games</a>
				<ul>
					<li><a href="#">Borderlands: The Pre Sequel</a></li>
					<li><a href="#">Deadspace 3</a></li>
					<li><a href="/GBCH-Entwicklung/sites/League_of_Legends.php">League of Legends</a></li>
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
			
			<li><a href="/GBCH-Entwicklung/sites/userhome.php"><span class="register"><?php echo $username ?></span></a>
				<ul>
					<li>
						<span class = "logout"><a href="/GBCH-Entwicklung/ressources/logout.php">Logout</a></span>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<?php }?>
</body>
</html>