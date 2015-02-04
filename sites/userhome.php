<?php
session_start ();
$filename = '../Bilder/uploads/' . $_SESSION ['Username'] . '.png';
file_exists ( $filename );
include_once '../ressources/Menu_with_Banner.php';
include_once '../ressources/functions.php';
?>
<html>
<head>
<meta charset="UTF-8">
<title>GBCH - Kontakt</title>
<link href="../css/Project.css" type="text/css" rel="stylesheet" />
</head>
<?php

include_once '../ressources/ChangeAvatar.php';

// if user is not logged in, will be redirected within 5s //
if ($_SESSION ["logedin"] == false) {
	?>
		<div class="seite2">
		<?php
	echo "Du musst eingeloggt sein um diese Seite zu sehen!";
	header ( "Refresh: 3; url = ../sites/registration.php" );
	?>
	</div>

<!-- if user is logged in, no redirect -->
<?php }else{?>
<body>
	<div id="container">
		<div class="userhome">

			<!-- checks if user set an avatar -->
		<?php
	
if (file_exists ( $filename )) 
{?>
		<h4>Avatar</h4>
		<div class="avatar">
		<!-- the default avatar if no user avatar is set -->
			<div class="bw pic">
				<a href="#openAvatar"><img src="../Bilder/uploads/<?php echo $_SESSION["Username"]?>.png" alt="avatar"width="160px" height="160px"></a>
			</div>
			<span class = "display">Klicke auf das Bild um den Avatar zu &auml;ndern.</span>
		</div>
		<?php
} else {
		?>
		<h4>Avatar</h4>
		<div class="avatar">
		<!-- the default avatar if no user avatar is set -->
			<div class="bw pic">
				<a href="#openAvatar"><img src="../Bilder/uploads/none.jpg" alt="avatar"width="160px" height="160px"></a>
			</div>
			<span class = "display">Klicke auf das Bild um den Avatar zu &auml;ndern.</span>
		</div>
		<?php }?>
				
<?php	
$username = $_SESSION['Username'];
$db = $mysqli = new mysqli ( "localhost", "root", "", "gbch_data", "3307" );
$vorname = "SELECT * FROM registration WHERE Username =  '$username'";
$rs = $db->query ( $vorname );
$row = $rs->fetch_array ();
?>
<div class = "avatar2">
	<h4>Details</h4>
		<div class="display"><br>
			<form action="../ressources/change.php" method="post" accept-charset="ISO-8859-1">
				Username:<br> <input id="Username" name="Username" value="<?php echo $row['Username'];?>" readonly="readonly"/><br><br>
				Nachname:<br> <input id="Nachname" name="Nachname" value="<?php echo $row['Nachname'];?>" readonly="readonly"/> <br><br>
				Vorname:<br> <input id="Vorname" name="Vorname" value="<?php echo $row['Vorname'];?>" readonly="readonly"/> <br><br>
				Email:<br> 	<input id="Mail" name="Mail" value="<?php echo $row['Mail'];?>"/><br><br>
				Geburtsdatum:<br> <input id="Geburtsdatum" name="Gebutsdatum" value="<?php echo $row['Geburtsdatum'];?>" readonly="readonly"/> <br><br>	
				<input id="submit" type="submit" name="submit" value="&Auml;nderungen speichern" /><br>
				
			</form>
		</div>
	</div>	
		</div>
	</div>
</body>
<?php } ?>
</html>