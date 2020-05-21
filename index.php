<!DOCTYPE html>
<HTML>
		<head>
				<link href="css/geral.css" rel="stylesheet" type="text/css">
				<link rel="stylesheet" type="text/css" href="css/style.css" />
				<script type="text/javascript" src="js/jquery.js"></script>
				<link rel="icon" type="image/png" href="img/logo.ico">
				<title>Humanize-se - Página Inicial</title>
				<meta http-equiv="Content-Type" content="text/html;">
				<meta CHARSET="UTF-8">	
				
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
            
			
			
			<!-- BANNER-->

			<div id="wowslider-container1">
                <div class="ws_images">
                    <ul>	
                    	<?php
                    		require 'conexao.php';
                    		$nenhum="";		
							$selecionar=mysql_query("SELECT * FROM banner where id='1'");
							if(@mysql_num_rows($selecionar)==0){
							$nenhum=" Nenhuma imagem encontrada";
							}
							else{
							while($linha=mysql_fetch_array($selecionar)){
							$bannerimg=$linha ['imagem'];
								}
							}
						?>
						<?php
                    		require 'conexao.php';
                    		$nenhum="";		
							$selecionar=mysql_query("SELECT * FROM banner where id='2'");
							if(@mysql_num_rows($selecionar)==0){
							$nenhum=" Nenhuma imagem encontrada";
							}
							else{
							while($linha=mysql_fetch_array($selecionar)){
							$bannerimg2=$linha ['imagem'];
								}
							}
						?>
						<?php
                    		require 'conexao.php';
                    		$nenhum="";		
							$selecionar=mysql_query("SELECT * FROM banner where id='3'");
							if(@mysql_num_rows($selecionar)==0){
							$nenhum=" Nenhuma imagem encontrada";
							}
							else{
							while($linha=mysql_fetch_array($selecionar)){
							$bannerimg3=$linha ['imagem'];
								}
							}
						?>
                        <li><img src="upload/banner/img1/<?php echo $bannerimg;?>" alt="Encontre" title="Encontre" id="wows1_0"/></li>
                        <li><img src="upload/banner/img2/<?php echo $bannerimg2;?>" alt="Ajude" title="Ajude" id="wows1_1"/></li>
                        <li><img src="upload/banner/img3/<?php echo $bannerimg3;?>" alt="Contate" title="Contate" id="wows1_2"/></li>
                    </ul>
                </div>
                <div class="ws_bullets"><div>
                        <a href="#" title="Encontre"><span>1</span></a>
                        <a href="#" title="Ajude"><span>2</span></a>
                        <a href="#" title="Contate"><span>3</span></a>
                </div>
            </div>
            <div class="ws_shadow"></div>
            </div>	
            <script type="text/javascript" src="js/wowslider.js"></script>
            <script type="text/javascript" src="js/script.js"></script>
            
           <!--FIM DO BANNER-->
								
			
			<div class="conteudo">
				<!-- CONTEUDO PARTE 1-->
				<div id="tutorial">
				<br>
					<center><font face="Segoe UI" size="4px" color="#be3340"> SAIBA COMO FAZER</font></center>
					<table align="center">
						<tr align="center">
							<td><img src="img/tutorial1.png" width="24%"></td>
							<td><img src="img/tutorial2.png" width="16%"></td>
							<td><img src="img/tutorial3.png" width="29%"></td>
							<td><img src="img/tutorial4.png" width="23%"></td>
						</tr>
						<tr>
							<td><h1>Procure o produto desejado</h1></td>
							<td><h1>Requisite o produto com o doador</h1></td>
							<td><h1>Combine os detalhes da entrega</h1></td>
							<td><h1>Retribua</h1></td>
						</tr>
					</table>
				</div>
			
				<!-- CONTEUDO PARTE 2 -->
				<hr width="80%" size="1px" color="#c4c4c4">
				<br><br>
				<div id="text_index_final">
					<?php
                    		require 'conexao.php';
                    		$nenhum="";		
							$selecionar=mysql_query("SELECT * FROM index WHERE id='1'");
							if(@mysql_num_rows($selecionar)==0){
							$nenhum=" Nenhuma registro encontrado";
							}
							else{
								while($linha=mysql_fetch_array($selecionar)){
								$id =$linha['id'];
								$titulo1=$linha ['titulo'];
								$texto1=$linha['texto'];
								echo $titulo1;
								echo "klsdjkldsafjl�djkldsf ~lkjk dsaf  celia";
								}
							}
                	?>
					<h3>CONHEÇA O PROJETO</h3>
					<br>
					<h4>Visamos o estímulo de doações através da internet, facilitando o processo de comunicação entre quem doa e quem recebe. 
					Acreditamos que cada pessoa pode fazer a diferença, e juntos podemos trazer conforto e mobilidade para aqueles que precisam dela para viver melhor.
					Uma sociedade solidária e atuante em função dos mais necessitados pode mudar uma nação inteira.
					Faça seu cadastro e desfrute já de poder ajudar quem mais precisa.</h4>
				</div>
				<br><br>
				<hr width="80%" size="1px" color="#c4c4c4">
				<!-- CONTEUDO PARTE 3-->
				<div id="index_text">
					<?php
                    		require 'conexao.php';
                    		$nenhum="";		
							$selecionar=mysql_query("SELECT * FROM index WHERE id=2");
							if(@mysql_num_rows($selecionar)==0){
							$nenhum=" Nenhuma registro encontrado";
							}
							else{
							while($linha=mysql_fetch_array($selecionar)){
							$id =$linha['id'];
							$titulo2=$linha ['titulo'];
							$texto2=$linha['texto'];
							}
							}
                	?>
					<h1>POR UM MUNDO MAIS HUMANO</h1>
					<p><h2>Aqui você encontra equipamentos para portadores de deficiência física. Você pode tanto anunciar seu produto como solicitar um deles diretamente com o doador.</p>
					<p>Juntos, podemos ajudar muitas pessoas. Anuncie agora  e torne-se parte dessa mudança.</p></h2>
				</div>
			
				
				<div id="index_img">					
							<img src="img/chat1.png" width="50%" style="float: left">
								<br><br><br><br><br>
							<img src="img/chat2.png" width="50%" style="float: right; margin-right: 10%">
				</div>
			</div>
			
			<!-- RODAPE-->
			<div style="height: 750px">
			</div>
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