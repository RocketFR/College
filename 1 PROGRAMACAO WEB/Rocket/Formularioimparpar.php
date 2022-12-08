<?php
	$num = $_POST ['numero'];
?>

<html>
		<Head>
			<title>Par ou Impar</title>
			<meta charset="UTF-8">
			
		</head>
		
		<body> 
		<?php
		if ($num%2 == 0)
		{
			echo("número par");
		}else {
			echo("número impar");
		}
		?>
		
		
		</body>
	</html>
	