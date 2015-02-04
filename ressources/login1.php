<head>
<meta charset="ISO-8859-1">
</head>

<?php
//Session
session_start();
$_SESSION["logedin"] = false;

//Skript
$username = $_POST['Username'];
$passwort = $_POST['Passwort'];

$mysqli = new mysqli("localhost", "root", "", "gbch_data", "3307");

$query = "select * from registration";

$result = $mysqli->query($query);


while($zeile = $result->fetch_array())
{
	if(($zeile["Username"]==$username) && ($zeile["Passwort"]==md5($passwort)))
	{
		$_SESSION["logedin"] = true;
		//Auch andere Infos aus der DB kann
		//man in der Session speichern
		$_SESSION['Username'] = $zeile["Username"]; //Der Name z.B.
		$_SESSION['Passwort'] = $zeile['Passwort']; 
		break;
	}
}
//In diesem Styl kannst du überall die Session Infos abrufen:
if($_SESSION["logedin"]){
header('Location: ../index.php');

} else {
	header ("Location: ../sites/login_fail.php");
}
?>