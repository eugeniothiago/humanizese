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
	$selecionar=mysql_query("DELETE FROM produto where id='$recuperaId'");
		if(@mysql_num_rows($selecionar)==0){
			$nenhum=" Houve um erro na exibição dos dados do produto";
			}
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=paineladmin.php'>"; 
?>
</body>
</html>
