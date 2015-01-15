<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
/**
 * Connect to mysql server
 * @param bool
 * @use true to connect false to close
 */
function dbConnect($close=true){

	$link = mysql_connect("localhost", "root", "") or die('Could not connect to MySQL DB ') . mysql_error();
	if (!mysql_select_db("gbch_data", $link))
		return false;
	
	if (!$close) {
		mysql_close($link);
		return true;
	}
}

/**
 * gravatar Image
 * @see http://en.gravatar.com/site/implement/images/
 */
function avatar($mail, $size = 60){
	$url = "http://www.gravatar.com/avatar/";
	$url .= md5( strtolower( trim( $mail ) ) );
	// $url .= "?d=" . urlencode( $default );
	$url .= "&s=" . $size;
	return $url;
}



?>