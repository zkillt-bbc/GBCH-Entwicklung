<?php
$username = $_POST['Username'];
$vorname = $_POST['Vorname'];
$nachname = $_POST['Name'];
$mail = $_POST['Email'];
$passwort = $_POST['Passwort'];
$geburtsdatum = $_POST['Geburtsdatum'];

// neue Datenbankverbindung
$mysqli = new mysqli("localhost", "root", "", "gbch_data", "3307");

$query = "select * from registration";

$result = $mysqli->query($query);

while($zeile = $result->fetch_array())
{
	if(($username != $zeile["Username"]))
	{
		$query = 'insert into registration (Benutzer_ID, Username, Nachname, Vorname, Mail, Passwort, Geburtsdatum, Avatar)
			values (null,"'.$username.'","'.$nachname.'","'.$vorname.'","'.$mail.'",md5("'.$passwort.'"),"'.$geburtsdatum.'","../ressources/Bilder/uploads/none.jpg");';
		
		$mysqli->query($query);
		header ("Location: ../sites/index.php");
	}
	else
	{
		header ("Location: ../sites/username_vorhanden.php");
	}
}
?>