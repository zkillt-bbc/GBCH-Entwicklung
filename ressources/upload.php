<head>
<meta charset="ISO-8859-1">
</head>

<?php 
session_start();
$string = str_replace("image/", "", "image/png");
$target_dir = "Bilder/uploads/";
$target_file = $target_dir . basename ( $_FILES ["fileToUpload"] ["name"] );
$uploadOk = 1;
$imageFileType = pathinfo ( $target_file, PATHINFO_EXTENSION );
// Check if image file is a actual image or fake image
if (isset ( $_POST ["submit"] )) {
	$check = getimagesize ( $_FILES ["fileToUpload"] ["tmp_name"] );
	if ($check !== false) {
		echo "File is an image - " . $check ["mime"] . ". ";
		$uploadOk = 1;
	} else {
		echo "File is not an image. ";
		$uploadOk = 0;
		header ("Refresh: 3; url=../sites/userhome.php");
	}
}
$umbenannt = $target_dir . $_SESSION["Username"] . "." . $string;
// Check if file already exists
if (file_exists ( $target_file )) {
	echo "Sorry, file already exists. ";
	$uploadOk = 0;
	header ("Refresh: 3; url=../sites/userhome.php");
}

// Check file size
if ($_FILES ["fileToUpload"] ["size"] > 9999999) {
	echo "Sorry, your file is too large. ";
	$uploadOk = 0;
	header ("Refresh: 3; url=../sites/userhome.php");
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") {
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
	$uploadOk = 0;
	header ("Refresh: 3; url=../sites/userhome.php");
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded. ";
	// if everything is ok, try to upload file
} else {
	if (rename($_FILES ["fileToUpload"] ["tmp_name"], $umbenannt)) {
		echo "The file " . basename ( $_FILES ["fileToUpload"] ["name"] ) . " has been uploaded. ";
		
		$mysqli = new mysqli("localhost", "root", "", "gbch_data", "3307");
		
		$query = 'insert into registration (Avatar)
			values ("'.$umbenannt.'") where Username = "'.$_SESSION["Username"].'"';
		
		$mysqli->query($query);
		header ("Refresh: 3; url = ../sites/userhome.php");
	} else {
		echo "Sorry, there was an error uploading your file. ";
	}
}
?>