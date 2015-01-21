<?php
session_start();
$_SESSION["logedin"] = false;
session_destroy();
if($_SESSION["logedin"]) {
	echo "Fehler, sie sind nicht ganz ausgeloggt";
}
else
{
	header("Location: index.php");
}