<html>
<head>
			<link href="css/geral.css" rel="stylesheet" type="text/css">
			<link href="css/component.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/style.css" />
			<script src="js/modernizr.custom.js"></script>
			<link rel="icon" type="image/png" href="img/logo.ico">			
            <title>Humanize-se - Busca</title>
			
	</head>

	<body bgcolor="#fefefe">	
		<!-- MENU -->
	<div class="geral">
			<header>
			<a href="index.php"><img src="img/logo_header.png" width="20%" style="margin-left: 10px; margin-top: 10px;"></a>
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
					$margin=" 10px";
					require 'conexao.php';
					session_start();
					$imagem=$_SESSION ['imagem'];
					$verificalogin=$_SESSION['verificalogin'];
					
					if ($verificalogin==1){
						
						$linklogin="paineluser.php";
						$imglogin=$imagem;
						$width="30%";
						$linkcadastro="sair.php";
						$imagemcadastro="Sair";
						$margin="-40px";
					}
				
						
				?>
				           
                
					<a href="<?php echo $linklogin;?>"><img src="upload/usuarios/<?php echo $imglogin?>" width="<?php echo $width; ?>"></a><a href="<?php echo $linkcadastro; ?>"><img src="img/<?php echo $imgcadastro; ?>" width="40%"></a>
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
			
			<!-- BUSCA-->
			
            <?php
					error_reporting(0);
            		require 'conexao.php';
            		$buscap=$_POST['buscaf'];
                    $sql ="SELECT*FROM produto where nome='$buscap'";
                    //Executamos a Query
                    $resultado=mysqli_query($conexao, $sql);
                    ?>
                   
                   
                    
                    <div class="show_show">
                    <?php
                    echo "<center>Exibindo resultados para $buscap</center>";
                    ?>
                    </div>
                    
                    
                    
                    <?php
                    $x=0;
                    while ($linha=mysqli_fetch_array($resultado))
                    {
						$id =$linha['id'];
						$produto=$linha['nome'];
						$estado=$linha['estado'];
						$descricao=$linha ['descricao'];
						$imagem=$linha ['imagem'];
                    ?>
                    
                    
                    <div class="show_geral">
                    
                    
                    
                    
                   <ul class="grid cs-style-7">
				<li>
					<figure>
						<img src="upload/produtos/<?php echo $imagem;?>" alt="img06" width="50%" height="50%" style="margin-right:30%;">
						<figcaption>
							<h3>
                           
								<p>Nome: <?php echo $produto;?></p>
								<p>Estado do produto:<?php echo $estado; ?></p>
								<?php echo "<a href='sobreproduto.php?id=$id'>Ver Produto</a>" ?>
                            
							</h3>
						</figcaption>
					</figure>
				</li>
         </ul> 
         <script src="js/toucheffects.js"></script>
                   
                   </div> 
                    
                    <?php
					$x++;
					}
					if($x==0)
					{
					echo "Não existem cadastros no banco de dados";
					}
					
					?>
            
           <!--FIM DA BUSCA-->
								
			
			
			
			<!-- RODAP�-->
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<footer>
				<div id="mapa">
					<table>
						<tr>
							<td><h1>HUMANIZE-SE</h1></td>
						</tr>
						<tr>
							<td><a href="index.php">Página Inicial</a></td>
							<td><a href="hover_equipamentos.php">Equipamentos</a></td></tr>
						<tr>
							<td><a href="projeto.php">Projeto</a></td>
							<td><a href="contato.php">Contato</a></td></tr>
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
							<td><a href="https://www.twitter.com/humanizese"><img src="img/twitter.png" width="10%"></a>
								<a href="https://www.facebook.com/humanizese"><img src="img/facebook.png" width="10%"></a>
								<a href="mailto:misigners@mail.com"><img src="img/mail.png" width="10%"></a></td>
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
	</body>
</html>