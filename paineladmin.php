<!DOCTYPE html>
	<head>
			<link href="css/geral.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/style.css" />
			<script type="text/javascript" src="js/jquery.js"></script>
			<link rel="icon" type="image/png" href="img/logo.ico">
			<title>Humanize-se - Painel do Administrador</title>
            <script type="text/javascript">
            function verificar(){
            var decisao = confirm("Tem certeza que deseja excluir?");
            if(decisao){
			return true;
			}
			else{
			return false;
			}
			}
            </script>
			
	</head>

	<body bgcolor="#fefefe">	
		<!-- MENU -->
	<div class="geral">
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
					$margin="2px";
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
				          
					
					<a href="paineluser.php"><img src="img/admin_logout.png" width="70%"></a>
				</div>
				
				
				<table style="margin-top:<?php echo $margin;?>">
                	<form method="post" action="busca.php">
                            <tr>
                                <td><input type="text" name="buscaf" maxlength="90" style="transition: border 0.3s; width: 182; border-radius: 4px; border-width: 2px; border-style: solid; border-color: #bebebe"></td><td><input type="image" src="img/pesquisar.png" name="buscaf" width="60%"></td>
                            </tr>
                    </form>
				</table>
			</header>
			<div style="height:130px;">
            </div>
			

			<div class="intro_admin">
			<img src="img/admin_intro.png" width="1000px" height="300px" style="position: absolute; z-index: -10">
				<div style="display: block; margin: 10px;width: 380px; height: 200px; float: right; background-color: #fc6363; opacity: 0.9; margin-top: 100px">
				<center><h1 style="color:#ffffff">BEM-VINDO, ADMINISTRADOR</h1></center>
				<i align="justify" style="display: block; margin: 10px;font-family: Segoe UI; font-size: 15px; color: #ffffff">Nesta seção, você pode excluir produtos, banir usuários e definir novas imagens para o banner da página
				inicial.<br> Lembre se de consultar os <a href="termos.html">Termos de Uso</a> para determinar se
				o usuário feriu os regulamentos citados no documento. O mesmo pode ser feito com os produtos.</i>
				</div>
			</div>
			
			
			<!-- DIV CENTRAL-->
			<div class="a" style="width: 100%; height: auto; float: left;">
				<h1>ALTERAR IMAGENS DO BANNER</h1>
			<table>
				<tr>
				<td><table>
				<tr>
					<td><h1 style="font-family: Segoe UI; font-size: 13px; color: #606060">IMAGEM 01</h1>
						<form method="post" enctype="multipart/form-data" action="up_banner1.php">
							<input type="file" name="arquivo" style="width:115px;">
							<input type="submit" value="alterar"></form></td>
				</tr>
				</table></td>
				
				<td><table>
				<tr>
					<td><h1 style="font-family: Segoe UI; font-size: 13px; color: #606060">IMAGEM 02</h1>
						<form method="post" enctype="multipart/form-data" action="up_banner2.php">
							<input type="file" name="arquivo" style="width:115px;">
							<input type="submit" value="alterar"></form></td>
				</tr>
				</table></td>
				
				<td><table>
				<tr>
					<td><h1 style="font-family: Segoe UI; font-size: 13px; color: #606060">IMAGEM 03</h1>
						<form method="post" enctype="multipart/form-data" action="up_banner3.php">
							<input type="file" name="arquivo" style="width:115px;">
							<input type="submit" value="alterar"></form></td>
				</tr>
				</table></td>
				</tr>
				</table>
			</div>
			
            <div class="boxdeleteuser">
			<hr width="60%" height="1px" color="#8c8c8c" style="border-radius: 0.5px">
			<center><h1>BANIR USUÁRIOS</h1></center>
			<font face="Segoe UI" size="2">
            	<br>
				<?php
					error_reporting(0);
					require 'conexao.php';
					session_start();
					$emailadm=$_SESSION['emailSession'];
					$sql ="SELECT*FROM login ";
                    //Executamos a Query
                    $resultado=mysql_query($sql);
                    while ($linha=mysql_fetch_array($resultado))
                    {
					$id =$linha['id'];
					$nome=$linha['nome'];
					$email=$linha['email'];
					$imagem=$linha ['foto'];
					?>
                    
                    <div class="boxuser">
					<img src="upload/usuarios/<?php echo $imagem; ?>"><br>
                    <?php
					echo "Código: <i>". $id."</i><BR>";
					echo "Nome: <i>".$nome."</i><BR>";
					echo "Email: <i>".$email."</i><BR>";
					echo "<span><a href='deleteusuario.php?id=$id'onclick='return verificar();'>Excluir Usuário</a></span>";
					?>
                    </div>
            
            		<?php
					}
					?>
            	
            </div>
            
            <br>
            <hr width="100%" height="20px" color="#FF3333">
            <br>
            
            <div class="boxdeleteproduto">
			<center><h1>EXCLUIR PRODUTOS</h1></center>
            	<br>
				<?php
					error_reporting(0);
					require 'conexao.php';
					$sql ="SELECT*FROM produto ";
                    $resultado=mysql_query($sql);
                    while ($linha=mysql_fetch_array($resultado))
                    {
					$id =$linha['id'];
					$produto=$linha['nome'];
					$estado=$linha['estado'];
					$descricao=$linha ['descricao'];
					$imagem=$linha ['imagem'];
				?>
                    
					<div class="boxproduto">
					<img src="upload/produtos/<?php echo $imagem; ?>"><br>
                    <?php
					echo "Código: <i>". $id."</i><BR>";
					echo "Produto: <i>".$produto."</i><BR>";
					echo "Estado de Conservação: <i>".$estado."</i><BR>";
					echo "Descrição: <i>".$descricao."</i><BR>";
					echo "<span><a href='deleteproduto.php?id=$id' onclick='return verificar();'>Excluir Produto</a></span>";
					?>
                    <BR>
					</div>
            
            		<?php
					}
					?>
                    </font>
            </div>
			<a href="sair.php">Logout</a>
			
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
					
				</div>
			</footer>
		</div>
	</body>
</html>
