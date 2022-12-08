<?php

$rgm = $_POST['rgm'];
$nome = $_POST['nome'];
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];

if (!empty($_POST['rgm'])){
    header("location: profnota.html");
}

$pont = fopen("cadnotas.txt","a+");

/*
str = string = literal
len = lenght = tamanho
strlen = tamanho do literal
*/
fwrite ($pont,$rgm,strlen($rgm));
fwrite ($pont,",",1);

fwrite ($pont,$nome,strlen($nome));
fwrite ($pont,",",1);

fwrite ($pont,$a1,strlen($a1));
fwrite ($pont,",",1);

fwrite ($pont,$a2,strlen($a2));

$espaco = "\n";
fwrite ($pont,$espaco,strlen($espaco));

fclose($pont);
?>