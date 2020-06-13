<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Documento sem título</title>
	</head>

<body>
	<?php
		error_reporting(0);
		require 'conexao.php';
		session_start();
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$nome= $_POST['nome'];
		$emailadm="admin@admin.com";
		$adm="N";
		$verificalogin="0";

		$sql = "SELECT * FROM login WHERE email='$email' and senha='$senha'";
		$login=mysqli_query($conexao, $sql );
		
		$verificalogin=mysqli_num_rows($login);
		
			if ($emailadm==$email)
				{
					$verificalogin==1;
					$adm="S";
					echo"
					<meta http-equiv=refresh content='0; URL=paineladmin.php';>
					<script type=\"text/javascript\">alert(\"Bem Vindo Administrador!\");</script>";
				} 
			if ($adm=="N")
			{	
					$verificalogin=="1";	
			
				if ($verificalogin==1) 
					{
						$_SESSION['emailSession']= $email;
						$_SESSION['senhaSession']= $senha;
						$_SESSION['nomeSession']= $nome;
						echo"
							<meta http-equiv=refresh content='0; URL=paineluser.php';>
							<script type=\"text/javascript\">alert(\"Bem Vindo <?php echo $nome ?>!\");</script>
						";
					}
				else 
					{
						if ($verificalogin==0) 
							{
								echo"
								<meta http-equiv=refresh content='0; URL=login.html';>
								<script type=\"text/javascript\">alert(\"Erro ao logar, tente novamente\");</script>";
							}
					}
					$_SESSION ['verificalogin']=$verificalogin;
			}
		
	?>
</body>
</html>