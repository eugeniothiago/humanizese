<!DOCTYPE HTML>
<html>
	<meta CHARSET="UTF-8">
	<head>
			<link href="css/geral.css" rel="stylesheet" type="text/css">
			<link href="css/component.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/style.css" />
			<script src="js/modernizr.custom.js"></script>
			<link rel="icon" type="image/png" href="img/logo.ico">
            <meta http-equiv="Content-Type" content="text/html;">
			<title>Humanize-se - Equipamentos</title>
			
	</head>

	<body bgcolor="#fefefe">	
				<!-- MENU -->
		<div class="geral">
				<header>
				<a href="index.php"><img src="img/logo_header.png" width="20%" style="margin-left: 10px; margin-top: 10px;"></a>
					<div style="height: 5px; width: 100%">
					</div>
					<div id="menu">
						<table>
							<tr>
								<td><a href="index.php">PÁGINA INICIAL</a></td>
								<td><a href="hover_equipamentos.php">EQUIPAMENTOS</a></td>
								<td><a href="projeto.php">PROJETO</a></td>
								<td><a href="contato.php">CONTATO</a></td>
							</tr>
						</table>
					</div>
					<div id="button">
					

						<?php

							error_reporting(0);
							$linklogin="login.html"	;
							$imglogin="login.png";
							$linkcadastro="cadastro_usuario.html";
							$imgcadastro="cadastrar.png";	
							$width="40%";
							$margintop="" ;
							$margin="10px";
							require 'conexao.php';
							session_start();
							$imagem=$_SESSION ['imagem'];
							$verificalogin=$_SESSION['verificalogin'];
							
							if ($verificalogin==1){

								$linklogin="paineluser.php";
								$imglogin=$imagem;
								$width="50px";
								$margin="-20px";
								$linkcadastro="sair.php";
								$imgcadastro="sair.png";
								$margintop= "-30px";
							}
						?>
							
					
						<a href="<?php echo $linklogin;?>"><img src="upload/usuarios/<?php echo $imglogin?>" width="<?php echo $width; ?>" style="border-radius:5%; margin-top:<?php echo $margintop;?>;"></a><font face="Segoe UI" size="2" color="#be3340" style="margin-left: 10px;">
						<a href="<?php echo $linkcadastro; ?>"><img src="img/<?php echo $imgcadastro; ?>" width="40%"></a></font>
					</div>
					
					
					<table style="margin-top:<?php echo $margin;?>">
						<form method="post" action="busca.php">
								<tr>
									<td><input type="text" name="buscaf" maxlength="90" style="transition: border 0.3s; width: 153px; border-radius: 4px; border-width: 2px; border-style: solid; border-color: #bebebe"></td>
									<td><input type="image" src="img/pesquisar.png" name="buscaf" width="60%"></td>
								</tr>
						</form>
					</table>
				
				</header>
					<div style="height:130px;">
					</div>
				
	
			<div style="width: 1000px; height: 800px; overflow:hidden; overflow-Y:scroll;">
		
			<?php
			error_reporting(0);
			require 'conexao.php';
			$nenhum="";	
			$query= "SELECT * FROM produto ORDER BY nome ASC";
			$sql=mysqli_query($conexao,$query);
			if(@mysqli_num_rows($sql)==0)
				{
					$nenhum=" Nenhum produto cadastrado";
				}
			else
				{
					while($linha=mysqli_fetch_array($sql))
					{
						$id =$linha['id'];
						$imagem=$linha ['imagem'];
						$produto=$linha['nome'];
						$estado=$linha['estado'];
						$descricao=$linha ['descricao'];
						$estadof=$linha ['estado'];
					}
				}
				?>

			<ul class="grid cs-style-7">
					<li>
						<figure>
							<img src="upload/produtos/<?php echo $imagem;?>" alt="img06" width="50%" height="50%" style="margin-right:30%;">
							<h4>
							<table>
								<tr>
									<td>Produto:</td><td><i> <?php echo utf8_encode($produto); ?></i></td>
								</tr>
								<tr>
									<td>Estado:</td><td> <i><?php echo utf8_encode($estado); ?></i></td>
								</tr>
							</table></h4>
							
							<figcaption>
								<h3>
									<table>
										<tr>
											<td>Produto:</td><td><i><?php echo utf8_encode($produto);?></i></td>
										</tr>
										<tr>
											<td>Estado:</td><td><i><?php echo utf8_encode($estado); ?></i></td>
										</tr>
										<tr>
											<td><?php echo "<a href='sobreproduto.php?id=$id'>Ver Produto</a>" ?></td>
										</tr>
									</table>
								
								</h3>
							</figcaption>
						</figure>
					</li>
			</ul> 
			<script src="js/toucheffects.js"></script>
			
			</div>
				<div height="200px;">
				</div>
		<!-- RODAPÉ-->
				<footer>
					<div id="mapa">
						<table>
							<tr>
								<td><h1>HUMANIZE-SE</h1></td>
							</tr>
							<tr>
								<td><a href="index.html">Página Inicial</a></td>
								<td><a href="hover_equipamentos.php">Equipamentos</a></td></tr>
							<tr>
								<td><a href="projeto.html">Projeto</a></td>
								<td><a href="contato.html">Contato</a></td></tr>
							<tr>	
								<td><a href="cadastro.html">Cadastro</a></td>
								<td><a href="#" onClick="window.open('termos.html', 'Termos', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=500, HEIGHT=400');">Termos de Uso</a></td>
							</tr>
						</table>
					</div>
					<div id="contato">
						<table>
							<tr>
								<td><h1>FALE CONOSCO</h1></td>
							</tr>
							<tr>
								<td><a href="https://www.twitter.com/humanizese"><img src="img/twitter.png" width="12%"></a>
									<a href="https://www.facebook.com/misigners"><img src="img/facebook.png" width="12%"></a>
									<a href="https://plus.google.com/misigners"><img src="img/plus.png" width="12%"></a>
									<a href="mailto:misigners@mail.com"><img src="img/mail.png" width="12%"></a></td>
							</tr>
						</table>
					</div>	
					<br><br><br><br><br><br><br>
					<div id="footer">
						<table>
							<tr>
								<td><h1>Misigners 2015 - <a href="#" onClick="window.open('termos.html', 'Termos', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=500, HEIGHT=400');">Termos de Uso</a></h1></td>
								<td><img src="img/logo_footer.png"></td>
							</tr>
						</table>
					</div>
				</footer>
			</div>
		</div>
	</body>

</html>