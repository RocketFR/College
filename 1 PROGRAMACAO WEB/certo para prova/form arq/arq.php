<?php
$n = $_POST['nome'];
$s = $_POST['senha'];
$s = $s . "\n";
/*
! operador lógico de negação
empty = verificar se está vazio 
&& operador lógico = duas condiçõe tem q verdade
para resultado verdade

*/
if (!empty($n) && !empty($s))
{
	$bd = fopen('cadastro.txt','a');
	fwrite ($bd,$n,strlen($n));
	fwrite ($bd,',',1);
	fwrite ($bd,$s,strlen($s));
	fclose($bd);
	print "Dados salvos com sucesso!";
	
}
		else 
		{	print "Não cadastrado!";
		}

?>