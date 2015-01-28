<?php
session_start();
$filename = '../ressources/Bilder/uploads/'  . $_SESSION['Username'] . '.png';
file_exists($filename);
include_once 'GBCH-Entwicklung/js/funtions.js';
?>
<link rel="stylesheet" href="../css/Project.css">

<!-- Code von Popup -->
<div id="openAvatar" class="ChangeAvatar">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>Avatar &auml;ndern</h2><br>
		<?php if (file_exists($filename))
		{?>
			<img src="../ressources/Bilder/uploads/<?php echo $_SESSION["Username"]?>.png" alt="avatar" width="100px" height="100px" style="border-radius:15px"><br><br><br>
		<?php }
		else 
		{?>
			<img src="../ressources/Bilder/uploads/none.jpg" alt="avatar" width="100px" height="100px" style="border-radius:15px"><br><br><br>
		<?php }?>
		
		<!-- Upload -->		<form action="../ressources/upload.php" method="post" enctype="multipart/form-data">
			<div id="upload" class="upload">
		    	<input type="file" name="fileToUpload" id="fileToUpload">
			</div>		
			
			<p>Es wird empfohlen ein Bild mit mindestens 200x200 Pixel zu benutzen.</p>
		    <input type="submit" value="Bild hochladen" name="submit">
		</form>
	</div>
</div>
