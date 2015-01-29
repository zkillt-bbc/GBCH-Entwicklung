<?php
/**
 * Connect to mysql server
 * @param bool
 * @use true to connect false to close
 */
function dbConnect($close=true)
{
	$link = mysql_connect("localhost", "root", "", "3307") or die('Could not connect to MySQL DB ') . mysql_error();
	if (!mysql_select_db("gbch_data", $link))
		return false;
	
	if (!$close) {
		mysql_close($link);
		return true;
	}
}
?>