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
        $id=$_POST['id'];    
	 	$nomep=$_POST['nomef'];
        $estadop=$_POST['estadof'];
        $descricaop=$_POST['descricaof'];
        $sql="UPDATE produto SET nome='$nomep', estado='$estadop', descricao='$descricaop' WHERE id='$id'";
          $resultado=mysql_query($sql);
		  echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=paineluser.php'>
		  <script type=\"text/javascript\">alert(\"Produto Alterado com Sucesso!\");</script>";
		  
		  ?>
</body>
</html>