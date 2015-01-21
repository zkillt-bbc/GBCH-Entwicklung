<?php
session_start();
include_once '../ressources/Menu_with_Banner.php';
include_once '../ressources/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>GBCH - Kontakt</title>
<link href="../css/Project.css" type="text/css" rel="stylesheet" />
</head>
<?php include_once '../ressources/ChangeAvatar.php';
?>
<body>
	<div id="container">
		<div class = userhome>
			<div class = "bw pic"><a href="#openAvatar"><img src="../ressources/Bilder/none.jpg" alt="avatar"></a></div>
			<div class = "display">
				<text><?php echo $_SESSION["Username"]?> </text>
				<form action=""></form>
			</div>
		</div>
	</div>
</body>
</html>

