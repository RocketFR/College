<?php 
	$nome = $_POST['nome'];
	$opcoes = $_POST['opcoes'];
	$numero = $_POST['numero'];
	$senha= $_POST['senha'];
	$form_check = $_POST['form_check'];
	//$form_radio = $_POST['form_radio'];
	
	print $nome;
	print "<br>";
	print $opcoes;
	print "<br>";
	print $numero;
	print "<br>";
	print $senha;
	print "<br>";
	//print $form_check[0];
	print "<br>";
	//print $form_radio;
	
	print_r ($form_check);
	
	for ($i = 0; $i < $form_check.sizeof(); $i++) {
		print $form_check[i];
		print "<br>";
	}
?>