<?php

$lin = $_POST['linha'];
$col = $_POST['coluna'];

//print $lin . " " . $col . " ";

?>

<html>
<head>
	<meta charset="utf-8">
</head>
<body>

	<table border="1">
	
		<?php for ($l=0;$l<$lin; $l++) { ?>
		<tr> 
		
			<?php for ($c=0;$c<$col; $c++) { ?>
				<td> <?php print "linha ". $l+1 . " coluna " . $c+1; ?> </td> 
			<?php }?>
		
		</tr> <?php }?>
	
	</table>

</body>
</html>