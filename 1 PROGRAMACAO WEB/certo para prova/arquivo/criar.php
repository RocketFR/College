<?php

/*

modelo fopen(nomedoarquivo.extensao, tipo de abertura)

tipo de abertura: 
w: write = escrita
a: append = adicionar 
r: read = leitura


*/

$arqtxt = fopen('bdaluno.txt', 'r');
//$arqtxt = é um ponteiro = nao se escreve dentro do arquivo direto
// f = file = arquivo

if ($arqtxt == true)
{
	//$linha = $_POST['nome'] ."\n";
	
	$linha="ana  \n";
	
	/*
	 fwrite(nomedoponteiro, conteudo, tamanho)
	 fwrite($arqtxt, "ana",3)
	*/
	
	/*
		str = caracter = string
		len = length = tamanho 
	*/
	
	/*
		$x = strlen($linha);
		print $x . "tamanho <br>";
	*/
	
	fwrite($arqtxt,$linha,strlen($linha));
	
	print "$linha escrito com sucesso!";
}
else
{
	print "Aquivo inexistente";
	exit(0);
}

fclose($arqtxt);


?>