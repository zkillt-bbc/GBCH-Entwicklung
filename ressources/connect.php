<?php

/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'gbch_data';
$db_ports		= '3307' ;

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass, $db_ports) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>