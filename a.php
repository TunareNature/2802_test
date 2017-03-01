<?php 
	 echo 'A<hr/>';
	$rs = file_get_contents('http:app-b-service/b.php');
	var_dump($rs);
	
?>