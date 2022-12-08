<?php

$arqtxt = fopen('bdaluno.txt', 'r');

while(true)
{
	$linha = fgets($arqtxt);
	
	if ($linha==null)
	  break;

	//echo $linha . "<br>";
	
	echo"<table border='1' width ='40%'>";
	echo"<tr>";
	echo"	<td>$linha</td>";
	echo"</tr>";
	echo"</table>";
}

fclose($arqtxt);

?>