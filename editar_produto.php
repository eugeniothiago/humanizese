<!DOCTYPE html>
	<head>
			<meta charset="UTF-8">
			<link href="css/geral.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/style.css" />
			<script type="text/javascript" src="js/jquery.js"></script>
			<link rel="icon" type="image/png" href="img/logo.ico">
			<title>Humanize-se - Editar Produto</title>
			
	</head>

	<body bgcolor="#fefefe">	
		<!-- MENU -->
	<div class="geral">
    		<?php 
            error_reporting(0);
            require 'conexao.php';
            session_start();
            $email=$_SESSION['emailSession']
            ?>
			<header>
			<a href="index.html"><img src="img/logo_header.png" width="20%" style="margin-left: 10px; margin-top: 10px;"></a>
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
					$margin="10px";
					require 'conexao.php';
					session_start();
					$imagem=$_SESSION ['imagem'];
					$verificalogin=$_SESSION['verificalogin'];
					
					if ($verificalogin==1)
					{
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
                                <td><input type="text" name="buscaf" maxlength="90" style="transition: border 0.3s; width: 182; border-radius: 4px; border-width: 2px; border-style: solid; border-color: #bebebe"></td><td><input type="image" src="img/pesquisar.png" name="buscaf" width="60%"></td>
                            </tr>
                    </form>
				</table>
			</header>
			<div id="teste" style="height:130px;">
            </div>
			
			<!-- CADASTRO DE PRODUTO -->
				<?php
			error_reporting(0);		
			require'conexao.php';
			session_start();
			$verificalogin=$_SESSION['verificalogin'];
			$recuperaId = $_GET['id'];
			$nenhum="";	
			$sql = "SELECT * FROM produto where id='$recuperaId'"	;
			$selecionar=mysqli_query($conexao, $sql);
				if(@mysqli_num_rows($selecionar)==0){
			$nenhum=" Houve um erro na exibição dos dados do produto";
			}
		else{
			while($linha=mysqli_fetch_array($selecionar)){

			$id=$linha['id'];
			$produto=$linha['nome'];
			$imagem=$linha['imagem'];
			$descricao=$linha['descricao'];
			$estado= $linha ['estado'];
			}
		}
		?>
		<center><h1>EDITAR PRODUTO</h1></center>
		<table>
		<tr>
			<td>
			<table>
			<tr>
				<form method="post" enctype="multipart/form-data" action="update_foto_produto.php">
				
					<td><img src="upload/produtos/<?php echo $imagem;?>" style="max-width: 90px"></td>
					<input type="text" value="<?php echo $id;?>" style="pointer-events:none; display:none" name="id">
			</tr>
			<tr>
					<td><i>Escolha um arquivo de imagem para exibição do produto</i></td>
			<tr>	
					<td><input type="file" name="arquivo" id="arquivo"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Enviar"></td>
				</form>	
			</tr>
			</table></td>
			
			
			<td style="padding:70px;"><table  style="border: 1px solid; border-color: #f16868; border-radius: 3px">
			<tr>
				<form method="post" action="update_produto.php">
			<tr>
					<td><font color="#be3340">EDITAR INFORMAÇÕES</font></td>
			</tr>
			<tr>
					<td><i>Altere as informações sobre o produto</i></td>
			</tr>
			<tr>
					<td><input type="text" value="<?php echo $id;?>" style="pointer-events:none;display:none" name="id"></td>
			</tr>
			<tr>
					<td><i>Nome do Produto</i></td>
					<td><input type="text" value="<?php echo $produto; ?>" name="nomef"></td>
			</tr>
			<tr>
					<td><i>Estado de Conservação</i></td>
					<td><input type="text" value="<?php echo $estado; ?>" name="estadof"></td>
			</tr>
			<tr>
					<td><i>Descrição</i></td>
					<td><input type="text" value="<?php echo $descricao; ?>" name="descricaof"></td>
			</tr>
			<tr>
					<td><input type="submit" value="Atualizar"></td>
			</tr>
				</form>
		</table></td>
		</tr>
		</table>
				<!-- RODAPÉ-->
				<br><br><br><br><br>
				<footer>
				<div id="mapa">
					<table>
						<tr>
							<td><h1>HUMANIZE-SE</h1></td>
						</tr>
						<tr>
							<td><a href="index.html">Página Inicial</a></td>
							<td><a href="equipamentos.html">Equipamentos</a></td></tr>
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
					
				</div>
			</footer>
		</div>
	</body>
</html> 