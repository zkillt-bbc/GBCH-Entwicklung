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
		$_SESSION['Name'] = $zeile["Name"]; //Der Name z.B.
		$_SESSION['Vorname'] = $zeile["Vorname"]; 
		break;
	}
}
//In diesem Styl kannst du überall die Session Infos abrufen:
if($_SESSION["logedin"]){
echo "Hallo ".$_SESSION["Vorname"].", du bist eingeloggt";

header('Location: user.php');

} else {
	header ("Location: login_fail.php");
}
?>