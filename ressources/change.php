<?php
session_start();
$username = $_POST['Username'];
$mail = $_POST['Mail'];
$aktuell = $_SESSION['Username'];

// neue Datenbankverbindung
$mysqli = new mysqli("localhost", "root", "", "gbch_data", "3307");

$query = "select * from registration";

$result = $mysqli->query($query);

while($zeile = $result->fetch_array())
{
	if(($username != $zeile["Mail"]))
	{
		$query = 'UPDATE registration SET Mail = "'.$mail.'" WHERE Username = "'.$aktuell.'";';		
		$mysqli->query($query);
		header ("Location: ../sites/userhome.php");
	}
	else
	{
		header ("Location: ../sites/username_vorhanden.php");
	}
}
?>