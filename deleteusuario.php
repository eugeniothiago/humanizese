<html>
	<head>
		<title>Sobre produto</title>
	</head>
	<body>
<?php
	error_reporting(0);		
	require'conexao.php';
	$recuperaId = $_GET['id'];
	$nenhum="";		
	$sql = "DELETE FROM login where id='$recuperaId'";
	$selecionar=mysqli_query($conexao,$sql);
		if(@mysqli_num_rows($selecionar)==0)
			{
				$nenhum=" Houve um erro na exibição dos dados do produto";
			}
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=paineladmin.php'>"; 
?>
</body>
</html>
