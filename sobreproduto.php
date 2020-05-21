<!DOCTYPE html>
	<head>
			<link href="css/geral.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/style.css" />
            <link rel="stylesheet" href="css/lightbox.css">
			<script type="text/javascript" src="js/jquery.js"></script>
            <script src="js/jquery-1.11.0.min.js"></script>
			<script src="js/lightbox.js"></script>
			<link rel="icon" type="image/png" href="img/logo.ico">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Humanize-se</title>
			
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
			
			<!-- DETALHES DO PRODUTO-->
			
			<div class="det_produto">
			<center><font face="Segoe UI" size="4" color="#be3340">DETALHES DO EQUIPAMENTO</font></center>
			<br>
			
<?php
	error_reporting(0);		
	require'conexao.php';
	session_start();
	$verificalogin=$_SESSION['verificalogin'];
	if ($verificalogin==0) {
		echo 
				"<meta http-equiv=refresh content='0; URL=login.html';>
				<script type=\"text/javascript\">alert(\"Você não tem permissão para acessar esta página. Faça login ou cadastre-se para poder visualizar os detalhes do equipamento. \");</script>
				";
	}
	else {
		$verificalogin="1";
	$recuperaId = $_GET['id'];
		$nenhum="";		
	$selecionar=mysql_query("SELECT * FROM produto where id='$recuperaId'");
		if(@mysql_num_rows($selecionar)==0){
			$nenhum=" Houve um erro na exibição dos dados do produto";
			}
		else{
			while($linha=mysql_fetch_array($selecionar)){
			
			$produto=$linha['nome'];
			$imagem=$linha['imagem'];
			$descricao=$linha['descricao'];
			$estado= $linha ['estado'];
			$emailu=$linha['emailuser'];
			}
		}
	}
			
				?>
					<table>
					<tr>
					<td>
                    
						<a href="upload/produtos/<?php echo $imagem; ?>" data-lightbox="a.jpg"><img src="upload/produtos/<?php echo $imagem;?>"></a></td>
                    
					<td>
                    <table>
					<tr>
						<td><h1>Nome do Produto:</h1></td>
						<td><h2><?php echo utf8_encode($produto)."<br>";?></h2></td>
					</tr>
					<tr>
						<td><h1>Estado de Conservação:</h1>
						<td><h2><?php echo $estado."<BR>";?></h2></td>
					</tr>
					<tr>
						<td><h1>Descrição:</h1></td>
						<td><h2><?php echo utf8_encode($descricao) ?></h2></td>
					</tr>
					<tr>
                        <td><h1>Contato: </h1></td>
						<td><a href="mailto:<?php echo $emailu; ?>"><?php echo $emailu; ?></a></td>
					</tr>
					<tr>
						<td><h1>Telefone:</h1>
						<td><?php echo $telefoneu; ?></a></td>
					</tr>
						</table>
						</table>
						
				<br><br>
				<a href="hover_equipamentos.php"><font face="Segoe UI Light" size="3">Voltar para equipamentos</font></a>
                					
			</div>
<!-- RODAPÉ-->
			<div style="height: 200px;">
			</div>
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
							<td><a href="#" onclick="window.open('termos.html', 'Termos', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=500, HEIGHT=400');">Termos de Uso</a></td>
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
							<td><h1>Misigners 2015 -<a href="#" onclick="window.open('termos.html', 'Termos', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=500, HEIGHT=400');">Termos de Uso</a></h1></td>
							<td><img src="img/logo_footer.png"></td>
					
				</div>
			</footer>
		</div>
	</body>
</html>
