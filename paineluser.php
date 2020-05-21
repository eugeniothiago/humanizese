<!DOCTYPE html>
	<head>
			<link href="css/geral.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/style.css" />
			<script type="text/javascript" src="js/jquery.js"></script>
			<link rel="icon" type="image/png" href="img/logo.ico">
			<title>Humanize-se - Meu Painel</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
				<?php
					error_reporting(0);
					require'conexao.php';
					session_start();
					$email=$_SESSION['emailSession'];
					$sql ="SELECT*FROM login WHERE email='$email' ";
			       	//Executamos a Query
			        $resultado=mysql_query($sql);
			        while ($linha=mysql_fetch_array($resultado))
			        {
					$id =$linha['id'];
					$nome=$linha['nome'];
					$email=$linha['email'];
					$imagem=$linha ['foto'];
					$senha=$linha['senha'];
					$endereco=$linha['endereco'];
					$telefone=$linha['telefone'];
					$estado=$linha['estado'];
					$cidade=$linha ['cidade'];
					$_SESSION ['imagem']=$imagem;
					$_SESSION['id']=$id;
		}
		
					?>
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
                                <td><input type="text" name="buscaf" maxlength="90" style="transition: border 0.3s; width: 182; border-radius: 4px; border-width: 2px; border-style: solid; border-color: #bebebe"></td><td><input type="image" src="img/pesquisar.png" name="buscaf" width="60%"></td>
                            </tr>
                    </form>
				</table>
               
			</header>
            <div style="height:130px;">
            </div>
            
		
					
						<div class="painel_user_header">
							<div id="painel_foto">
								<table>
								<tr>
                                    <td>
                                    	<img src="upload/usuarios/<?php echo $imagem; ?>" style="max-width: 60%; margin: 10px; border: 8px solid white; border-radius: 2px">
                                    </td>
                                    
                                    <td>
                                    	<font face="Segoe UI Light" size="5" color="white"><?php echo "Olá, ". $nome;?></font>
                                    </td>
                                </tr>    

								
								</table>
							</div>

						</div>
						
						<div style="margin-right: 450px">
						<form method="post" enctype="multipart/form-data" action="update_foto.php">
								<font face="Segoe UI"><i>Alterar imagem de usuário</i></font><br>
                                <input type="file" id="arquivo" name="arquivo"><br>
                                <input type="submit" value="Confirmar alteração">
                        </form>
						</div>
						
						<div class="painel_user">
							
							<div id="painel_form">
	                            <h1>ALTERAR DADOS DO CADASTRO</h1>
                                	
                                    	<form method="post" action="update_usuario.php">
                                    	<table>
                                            
                                            <tr>
                                                <td><h2>Nome: </h2></td>
                                                <td><input type="text" name="nomef" size="15" value="<?php echo utf8_encode($nome); ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><h2>Endereço: </h2></td>
                                                <td><input type="text" name="enderecof" size="15" value="<?php echo utf8_encode($endereco); ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><h2>Cidade: </h2></td>
                                                <td><input type="text" name="cidadef" size="15" value="<?php echo utf8_encode($cidade); ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><h2>Estado: </h2></td>
                                                <td><select name="estadof">
                                                        <option selected  value="0">Escolha o estado</option>
                                                        <option value="Acre">Acre</option>
                                                        <option value="Alagoas">Alagoas</option>
                                                        <option value="Amapa">Amapá</option>
                                                        <option value="Amazonas">Amazonas</option>
                                                        <option value="Bahia">Bahia</option>
                                                        <option value="Ceará">Ceará</option>
                                                        <option value="Distrito Federal">Distrito Federal</option>
                                                        <option value="Espirito Santo">Espírito Santo</option>
                                                        <option value="Goias">Goiás</option>
                                                        <option value="Maranhao">Maranhão</option>
                                                        <option value="Mato Grosso">Mato Grosso</option>
                                                        <option value="Mato Grosso do Su">Mato Grosso do Sul</option>
                                                        <option value="Minas Gerais">Minas Gerais</option>
                                                        <option value="Para">Pará</option>
                                                        <option value="Paraiba">Paraíba</option>
                                                        <option value="Parana">Paraná</option>
                                                        <option value="Pernambuco">Pernambuco</option>
                                                        <option value="Piaui">Piauí</option>
                                                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                                        <option value="Rondonia">Rondônia</option>
                                                        <option value="Roraima">Roraima</option>
                                                        <option value="Santa Catarina">Santa Catarina</option>
                                                        <option value="Sao Paulo">São Paulo</option>
                                                        <option value="Sergipe">Sergipe</option>
                                                        <option value="Tocantins">Tocantins</option>
                                                </select></td>
                                            </tr>
                                            <tr>
                                                <td><h2>Sexo: </h2></td>
                                                <td><select name="estadof">
                                                		<option value="M">Masculino</option>
                                                		<option value="F">Feminino</option>
                                                		</td>
                                            </tr>
                                            <tr>
                                                <td><h2>Senha Atual: </h2></td>
                                                <td><input type="password" name="senhaf" size="15" value="<?php echo $senha ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><h2>Nova Senha: </h2></td>
                                                <td><input type="password" name="senhaf" size="15" value="<?php echo $senha ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><h2>Confirme a Nova Senha: </h2></td>
                                                <td><input type="password" name="senhaf" size="15" value="<?php echo $senha?>"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" value="Atualizar"></td>
                                             </tr>   
            
                                        </table>
                                        </form>
							</div>
                            
						</div>

					<div class="post_end">
						<h1>PRODUTOS POSTADOS<br>
						<a href="cadastrar_produto.php"><img src="img/cad_prod.png" width="15%"></a></h1>
					</div>

						<div class="posts" style="overflow:hidden; overflow-Y:scroll; margin-left: 50px;">
							<?php
                                error_reporting(0);
                                require'conexao.php';
                                session_start();
                                $email=$_SESSION['emailSession'];
                                $sql ="SELECT*FROM produto WHERE emailuser='$email' ";
                                //Executamos a Query
                                $resultado=mysql_query($sql);
                                while ($linha=mysql_fetch_array($resultado))
                                {
                                    $id =$linha['id'];
                                    $nome=$linha['nome'];
                                    $estadoc=$linha['estado'];
                                    $descricao=$linha ['descricao'];
                                    $imagem=$linha['imagem'];
                               
                            ?>
							
                            		<div class="post_all" style="float: left">
                            			<div class="post_img">
                            				<img src="upload/produtos/<?php echo $imagem;?>">
                            			</div>
										<DIV class="post_txt">

	                                        <b color="#fc6363">Produto: </b><?php echo utf8_encode($nome)."<BR>" ;?>
	                                        <b color="#fc6363">Qualidade: </b><?php echo utf8_encode($estadoc)."<BR>";?>
		               						<b color="#fc6363">Descrição: </b><?php echo utf8_encode($descricao)."<BR>";?>
	                                    	
	                                    </div>
										<div class="post_button">
												<?php echo "<a href='editar_produto.php?id=$id'><img src='img/edit_produto.png' width='40%'></a>";?>
												<?php echo "<a href='excluir_produto.php?id=$id' onClick='return verificar();'><img src='img/exc_produto.png' width='40%'></a>";?>
										</div>
									</div>
								<?php
								}
								?> 
							<br>
                        </div>

                                <br>

           
            
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
	</body>
</html>