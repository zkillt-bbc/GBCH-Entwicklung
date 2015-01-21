<?php session_start(); if($_SESSION["logedin"]){ ?>
<html>
<head>
<title>Test Login</title>
</head>
<body>
<h1>Logout</h1>

<h2><?php echo "Hallo " . $_SESSION['Vorname'] . " " .$_SESSION['Name'].", du bist eingeloggt", header ("Refresh: 0; url=index.php");?></h2>


</body>

</html>
<?php } ?>