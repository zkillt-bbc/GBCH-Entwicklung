<?php
	function change_username()
	{
		$mysqli = new mysqli("localhost", "root", "", "gbch_data", "3307");
		$query = "select * from registration";
		$result = $mysqli->query($query);
		$insertion = "UPDATE registration SET Username = $_POST['Username'] WHERE Username = $_SESSION['Username']";
	}
?>