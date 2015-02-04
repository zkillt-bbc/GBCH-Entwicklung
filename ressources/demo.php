<?php
// Error reporting:
error_reporting(E_ALL^E_NOTICE);
include "connect.php";
include "comment.class.php";
session_start();
/*
/	Select all the comments and populate the $comments array with objects
*/
$comments = array();
$result = mysql_query("SELECT * FROM comments ORDER BY dt DESC");
while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple AJAX Commenting System | Tutorialzine demo</title>

<link rel="stylesheet" type="text/css" href="../css/styles.css" />

</head>

<body>
<div class="body">




<div id="main1">

<div id="addCommentContainer">
	<p>F&uumlge einen Kommentar hinzu</p>
	<form id="addCommentForm" method="post" action="submit.php">
    	<div>
			<div class="oli">
				<label for="name">Your Name</label>  <input type="text" name="name"
					id="name" value="<?php echo $_SESSION['Username'];?>" readonly /> 
					</div>
				  
            <textarea name="body" rows="4"></textarea>
            
            <input type="submit" id="submit" value="Submit" class="btn btn-default" />
        </div>
    </form>
</div>
<?php


/*
/	Output the comments one by one:
*/
foreach($comments as $c){
	echo $c->markup();
}
?>

</div>



</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>

</body>
</html>