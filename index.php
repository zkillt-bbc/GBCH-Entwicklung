<?php 
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<title>GBCH - League of Legends</title>
<link rel="shortcut icon" href="GBCH_Browser_image.png" type="image/x-icon">
<link href="Project.css" type="text/css" rel="stylesheet"/>
</head>
<?php
include_once 'Menu_with_Banner.php';?>
<body>
	<div id="container">
	<div id="header">
		<div class = highlight>
			<a href="http://www.gbch.ch/games/farcry_4">Highlight: Far Cry 4</a>
		</div>
	</div>
</body>
</html>
<?php
include_once 'News.php';
include_once 'Aktuelle_Folgen.php';
include_once 'Footer.php';
?>