<?php 
session_start();
include_once '../ressources/Menu_with_Banner.php';
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
			<div class = kontakt>
				Kontakt
			</div>
			
			<div class = formular>
				<form>
					<input id="Name" name="Name" placeholder="Full name"/><br><br>
					<input id="Email" name="Email" placeholder="E-Mail"/><br><br>
					<input id="Betreff" name="Betreff" placeholder="Betreff"/><br><br>
					<textarea id="Text" name="Text" rows="10" cols="45" placeholder="Text hier eingeben"></textarea><br><br>
					<input type="submit" value="Senden"/>
				</form>
		</div>
		
		<div id = map>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10803.43424708422!2d8.480009710250842!3d47.39519246540772!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900bb76c2e3ad5%3A0x382d94aab113975!2sMax-H%C3%B6gger-Strasse+6%2C+8048+Z%C3%BCrich!5e0!3m2!1sde!2sch!4v1418885663511" width="530" height="300" frameborder="0" style="border:0"></iframe>
		</div>
		</div>
	</div>
</body>
</html>