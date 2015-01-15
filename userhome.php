<?php
session_start();
include_once 'Menu_with_Banner.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>GBCH - Kontakt</title>
<link href="Project.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div id="container">
		<div class = userhome>
			<span class = "useravatar"><img src="Bilder/none.jpg" alt="avatar"></span>
			<div class = "display">
				<text><?php echo $_SESSION["Username"]?> </text>
			</div>
		</div>
	</div>
</body>
</html>

