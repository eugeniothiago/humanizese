<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
    	error_reporting(0);
        require 'conexao.php';
        session_start();
		$email=$_SESSION['emailSession'];
		echo $email;
		?>
	<form method="post" action="update_usuario.php">
    	<p>Nome</p><input type="text" name="nomef">
        <p>Endereço</p><input type="text" name="enderecof">
        <p>Cidade</p><input type="text" name="cidadef">
        <p>Senha</p><input type="password" name="senhaf">
        <input type="submit">
     </form>   
</body>
</html>
