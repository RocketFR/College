<html>
<head>
    <title>Meu Formulário Dinâmico PHP Issset</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <label for="nome">Digite seu nome:</label>
    <input type="text" name="nome">
    <br>
    <label for="telefone">Digite seu telefone:</label>
    <input type="text" name="telefone">
    <br>
    <input type="submit" name="enviar">
</form>

<?php

if(isset($_POST['enviar']))
{
    print "O formulário foi enviado.<br>";
    print "Seu nome é ".$_POST['nome']."<br>";
    print "Seu telefone é ".$_POST['telefone']."<br>";
} 
?>
</body>
</html>