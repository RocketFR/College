<html>
    <head>
        <meta charset="utf-8">
        <title>Relatorio de notas</title>
    </head>

    <body>
    <?php   
	
	$pont = fopen("cadnotas.txt","r");
	
	
	while (true)
	{
		
		$linha = fgets($pont);
		
		if ($linha == null)
		{
			break;
			
			} else{
				$linha = trim($linha);
				$a = explode(",", $linha);
					
				//print_r ($a);
			
			/*
			$a[0] = 1234567
			$a[1] = renata
			$a[2] = 5
			$a[3] = 5
			intval = inteiro + valor = converte valores para inteiro
			*/
			
			$media	= intval($a[2] + $a[3]);
			
				if ($media >= 6)
				{
					$result = "aprovado";
					}
					else
					{
						$result = "exame final";
					}
			
					print $a[0] . " " . $a[2] . " " . $a[3] . " " . $media . " " .$result . "<br>";
		}
	}
	fclose($pont);
?>
	</body>
</html>