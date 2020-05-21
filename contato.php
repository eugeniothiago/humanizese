<!DOCTYPE html>
	<head>
			<link href="css/geral.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/style.css" />
			<script type="text/javascript" src="js/jquery.js"></script>
			<link rel="icon" type="image/png" href="img/logo.ico">
			<title>Humanize-se - Contato</title>
            <meta http-equiv="Content-Type" content="text/html; ">
			
	</head>

	<body bgcolor="#fefefe">	
		<!-- MENU -->
	<div class="geral">
			<header>
			<a href="index.html"><img src="img/logo_header.png" width="20%" style="margin-left: 10px; margin-top: 10px;"></a>
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
					$linkcadastro="cadastro.html";
					$imgcadastro="cadastrar.png";	
					$width="40%";
					$margin="10px";
					require 'conexao.php';
					session_start();
					$imagem=$_SESSION ['imagem'];
					$verificalogin=$_SESSION['verificalogin'];
					
					if ($verificalogin==1){
						$linklogin="paineluser.php";
						$imglogin=$imagem;
						$width="20%";
						$linkcadastro="sair.php";
						$imgcadastro="sair.png";
						$margin="-20px";
					}
				
						
				?>
				          
					
					<a href="<?php echo $linklogin;?>"><img src="upload/usuarios/<?php echo $imglogin?>" width="<?php echo $width; ?>" style="border-radius:5%;"></a><font face="Segoe UI" size="2" color="#be3340" style="margin-left: 10px;">
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
            
			
		<!-- CONTATO FORM-->
			<div class="contato_page">
			<center><h4>FALE CONOSCO</h4></center>
			<br>
			<h5>Caso queira enviar perguntas, sugestões, reclamações ou elogios, mande um e-mail para nossa equipe ou utilize uma das redes sociais.</h5>
			<br>
				<center>
				<a href="mailto:misigners@mail.com"><img src="img/enviar.png" width="35%"></a>
				<br>
				<a href="https://www.twitter.com/humanizese"><img src="img/twitter.png" width="9%"></a>
				<a href="https://www.facebook.com/misigners"><img src="img/facebook.png" width="9%"></a>
				<a href="https://plus.google.com/misigners"><img src="img/plus.png" width="9%"></a>
				</center>
			</div>
		<!-- RODAPÉ-->
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<footer>
				<div id="mapa">
				<br>
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
						<br>
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
				<br><br><br><br><br>
				<div id="footer">
					<table>
						<tr>
							<td><h1>Misigners 2015 - <a href="#" onClick="window.open('termos.html', 'Termos', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=500, HEIGHT=400');">Termos de Uso</a></h1></td>
							<td><img src="img/logo_footer.png"></td>
					
				</div>
			</footer>
		</div>
	</body>
</html>