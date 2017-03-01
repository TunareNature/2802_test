<?php
	echo 'B<hr/>';

	define('HOST', '95.142.168.124');
	define('USER', 'snad');
	define('PASS', 'snadsnad01!');
	define('NAME', 'snad');

	$db = mysql_connect(HOST, USER, PASS) or die(mysql_error()); 
	mysql_select_db(NAME, $db) or die(mysql_error()); 

	$query = "select * from Clients limit 1";
	$rs = mysql_query($query);
	$rw = mysql_fetch_object($rs);
	var_dump($rw);
	
?>