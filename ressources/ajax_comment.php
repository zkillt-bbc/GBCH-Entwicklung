<head>
	<meta charset="UTF-8" />
	<title>GBCH - League of Legends Ep. 1</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="../css/Project.css" type="text/css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="../js/script.js"></script>
</head>
<?php
session_start();
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
	include('config.php');
	include('function.php');
	
	$mysqli = new mysqli("localhost", "root", "", "gbch_data", "3307");
		
	if (!empty($_POST['comment']))
	{
		$username = $_SESSION['Username'];
		$comment = $_POST['comment'];

		$query = "
			INSERT INTO comment
			(id, username, comment)
			VALUES(null, '{$username}', '{$comment}')";			
	}
	
	$mysqli->query($query);
	
	$mail = mysql_query("select Mail from registration where Username = '{$_SESSION["Username"]}'");
?>

<div class="comment-item">
	<div class="comment-avatar">
		<img src="<?php echo avatar($mail) ?>" alt="avatar">
	</div>
	<div class="comment-post">
		<h3><?php echo $_SESSION["Username"] ?> <span>said....</span></h3>
		<p><?php echo $comment ?></p>
	</div>
</div>

<?php
	dbConnect(0);
endif?>