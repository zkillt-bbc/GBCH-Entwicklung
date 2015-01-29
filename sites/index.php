<?php
session_start ();
?>

<html>
<head>
<meta charset="ISO-8859-1">
<title>GBCH - Home</title>
<link rel="shortcut icon" href="../ressources/Bilder/GBCH_Browser_image.png" type="image/x-icon">
<link href="../css/Project.css" type="text/css" rel="stylesheet" />
</head>

<?php
include_once '../ressources/Menu_with_Banner.php';
?>

<body>
	<div id="container">
		<div id="header">

			<!-- Title incl. class "highlight" with background-image -->
			<div class=highlight>
				<a href="#">Highlight: Far Cry 4</a>
			</div>

		</div>
		<br>
	</div>
</body>
</html>

<?php
include_once '../ressources/News.php';
include_once '../ressources/Aktuelle_Folgen.php';
?>