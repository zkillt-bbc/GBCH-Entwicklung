<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>GBCH - League of Legends Ep. 1</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="../css/Project.css" type="text/css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="../js/script.js"></script>
</head>
<body>
<?php 
session_start();
require_once '../ressources/Menu_with_Banner.php';
?>
	<div class = "Youtube_Video">
		<iframe width="560" height="315" src="//www.youtube.com/embed/6mcVZeyluv8?list=UUngttbGHZE6vBamuevGFmQw" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="wrap">
	<?php
	error_reporting(0);
	if($_SESSION["logedin"]){
		// retrive post
		include('../ressources/config.php');
		include ('../ressources/function.php');
		dbConnect();
		
		$query = mysql_query(
			'SELECT *
			FROM comment');
		$row = mysql_fetch_array($query);
	?>

	<?php
		// retrive comments with post id
		$comment_query = mysql_query(
			"SELECT *
			FROM comment
			ORDER BY id DESC");
	?>
		<h2>Comments.....</h2>
		<div class="comment-block">
		<?php while($comment = mysql_fetch_array($comment_query)): ?>
			<div class="comment-item">
				<div class="comment-avatar">
					<img src="../ressources/Bilder/none.jpg" alt="avatar">
				</div>
				<div class="comment-post">
					<h3><?php echo $comment['username'] ?> <span>said....</span></h3>
					<p><?php echo $comment['comment']?></p>
				</div>
			</div>
		<?php endwhile?>
		</div>

		<h2>Submit new comment</h2>
		
		
		<form id="form" method="post" action="ajax_comment.php">
			<label>
				<span>Your comment *</span>
				<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Type your comment here...." required></textarea>
			</label>
		<div id="comment_submit" class="comment_submit">
			<input type="submit" id="submit" value="Submit Comment">
		</div>
		</form>	
		<p><a href="../ressources/logout.php">log out</a></p>
		<?php }
		else	
		{
			// retrive post
			include('../ressources/config.php');
			include ('../ressources/function.php');
			dbConnect();
			
			$query = mysql_query(
					'SELECT *
			FROM comment');
			$row = mysql_fetch_array($query);
			?>
			
				<?php
					// retrive comments with post id
					$comment_query = mysql_query(
						"SELECT *
						FROM comment
						ORDER BY id DESC");
							
				?>
				
			
					<h2>Comments.....</h2>
					<div class="comment-block">
					<?php while($comment = mysql_fetch_array($comment_query)): ?>
						<div class="comment-item">
							<div class="comment-avatar">
								<img src="../ressources/Bilder/none.jpg" alt="avatar">
							</div>
							<div class="comment-post">
								<h3><?php echo $comment['username'] ?> <span>said....</span></h3>
								<p><?php echo $comment['comment']?></p>
							</div>
						</div>
					<?php endwhile?>
					</div>
			<p> Bitte log dich ein um Kommentare zu schreiben: <a href="Registration.php">Login</a></p>
		<?php } ?>
	</div>
</body>
</html>