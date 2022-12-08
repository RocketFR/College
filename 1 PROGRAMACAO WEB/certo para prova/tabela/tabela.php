<html>

<head>
<?php
/*
$x = $_GET['lin'];
$y = $_GET['col'];
*/
?>


</head>

<body>

<table border="1">

	<?php for($linha=0;$linha < $_GET['lin'];$linha++) { print "<tr>";  ?>
	
		
		<?php for($coluna=0;$coluna < $_GET['col'];$coluna++){ print "<td>A</td>"; }?>
		
	
	<?php print "</tr>"; }?>
	
	

</table>



</body>


</html>