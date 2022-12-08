<?php


$resumo = $_POST['tex'];

$pont = fopen("resumo.txt", "a+");

fwrite($pont, $resumo, strlen($resumo));

fclose($pont);

?>