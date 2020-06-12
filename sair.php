<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log Out</title>
</head>

<body>
	<?php
		error_reporting(0);
		session_start();
		require 'conexao.php';
		$_SESSION['emailSession'];
		$_SESSION['senhaSession'];
		unset ($_SESSION['emailSession']);
		unset ($_SESSION['senhaSession']);
		
		session_destroy();
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
		?>
</body>
</html>
