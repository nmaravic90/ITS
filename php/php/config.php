<?php 
$host = "localhost";
$db_name = 'pc_shop';
$db_username = 'root';
$db_pass = '';

function konekcija(){
	global $host, $db_name, $db_username, $db_pass;
	$conect = mysql_connect($host, $db_username, $db_pass);
	if(!$conect)
	{
		die ('greska u konekciji' . mysql_error());
	}
	else
		mysql_select_db($db_name, $conect);
}

?>