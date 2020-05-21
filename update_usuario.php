<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>

	<?php 
		error_reporting(0);
		require 'conexao.php';
		session_start();
		$email=$_SESSION['emailSession'];
	 	$nomep=$_POST['nomef'];
         $enderecop=$_POST['enderecof'];
         $telefonep=$_POST['telefonef'];
         $estadop=$_POST['estadof'];
         $cidadep=$_POST['cidadef'];
         $senhap=$_POST ['senhaf'];
         $sql="UPDATE login SET nome='$nomep',endereco='$enderecop',telefone='$telefonep',estado='$estadop',cidade='$cidadep',senha='$senhap' WHERE email='$email'";
          $resultado=mysql_query($sql);
		  echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=paineluser.php'>
		  <script type=\"text/javascript\">alert(\"Dados Alterados com Sucesso!\");</script>";
		  
		  ?>
</body>
</html>