<?php
session_start ();
$filename = '../ressources/Bilder/uploads/' . $_SESSION ['Username'] . '.png';
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
		<!-- chooses the user avatar -->
			<div class="avatar">
				<div class="bw pic">
					<a href="#openAvatar"><img src="../ressources/Bilder/uploads/<?php echo $_SESSION["Username"]?>.png" alt="avatar" width="100px" height="100px"></a>
				</div>
				<span class = "display">Klicke auf das Bild um den Avatar zu &auml;ndern.</span><br><br><br><br><br><br>
				<h4>Details</h4>
			</div>
		<?php
	
} else {
		?>
		
		<!-- the default avatar if no user avatar is set -->
			<div class="bw pic">
				<a href="#openAvatar"><img
					src="../ressources/Bilder/uploads/none.jpg" alt="avatar"
					width="100px" height="100px"></a>
			</div>		
		<?php }?>
				
<?php	
$username = $_SESSION["Username"];
$db = $mysqli = new mysqli ( "localhost", "root", "", "gbch_data", "3307" );
$vorname = "SELECT * FROM registration WHERE Username =  '$username'";
$rs = $db->query ( $vorname );
$row = $rs->fetch_array ();
?>
<div class="display">
<?php echo $row['Username'];?> <br><br>
<?php echo $row['Nachname'];?> <br><br>
<?php echo $row['Vorname'];?> <br><br>
<?php echo $row['Mail'];?> <br><br>
<?php echo $row['Geburtsdatum'];?> <br><br>	
</div>	
			</div>
		</div>
	</div>
</body>
<?php } ?>
</html>