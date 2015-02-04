<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>GBCH - League of Legends Ep. 1</title>
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
<link href="../css/Project.css" type="text/css" rel="stylesheet" />
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../js/script.js"></script>
</head>
<body>
<?php
session_start ();
require_once '../ressources/Menu_with_Banner.php';
error_reporting ( E_ALL ^ E_NOTICE );
include "../ressources/connect.php";
include "../ressources/comment.class.php";
/*
 * /	Select all the comments and populate the $comments array with objects
 */
$comments = array ();
$result = mysql_query ( "SELECT * FROM comments ORDER BY dt DESC" );
while ( $row = mysql_fetch_assoc ( $result ) ) {
	$comments [] = new Comment ( $row );
}
?>
	<div class="Youtube_Video">
		<iframe width="560" height="315"
			src="//www.youtube.com/embed/6mcVZeyluv8?list=UUngttbGHZE6vBamuevGFmQw"
			allowfullscreen></iframe>
	</div>
	<div class="wrap">
	<?php
	error_reporting ( 0 );
	if ($_SESSION ["logedin"]) {
		?>
		<body>
				<div id="main1">

					<div id="addCommentContainer">
						F&uumlge einen Kommentar hinzu
						<form id="addCommentForm" method="post"
							action="../ressources/submit.php">
							<div>
								<div class="oli">
									<label for="name">Your Name</label> <input type="text"
										name="name" id="name"
										value="<?php echo $_SESSION['Username'];?>" readonly />
								</div>

								<textarea name="body" rows="4"></textarea>

								<input type="submit" id="submit" value="Submit"
									class="btn btn-default" />
							</div>
						</form>
					</div>
						<?php
		
		/*
		 * /	Output the comments one by one:
		 */

		foreach ( $comments as $c ) 
		{
			echo $c->markup ();
		}

		?>
		
		</div>



			</div>

			<script type="text/javascript"
				src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
			<script type="text/javascript" src="../js/script.js"></script>

		</body>
	<?php
	
} else {
		?>
				<body>
			<div class="body">
						<?php
		
		/*
		 * /	Output the comments one by one:
		 */
		foreach ( $comments as $c ) {
			echo $c->markup ();
		}
		?>
		
		</div>
		<script type="text/javascript"
		src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>

</body>
		<?php } ?>
</body>
</html>