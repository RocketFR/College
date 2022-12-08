<?php  
  $txt = $_GET['texto'];
  $tam = $_GET ['tamanho'];
  $cores = $_GET ['cor'];
?>

<html>
	<head>
	
	</head>
	
<body>

<font color="<?php print $cores; ?>" size="<?php print $tam;?>">

	<?php print $txt;?>
	
</font>

</body>