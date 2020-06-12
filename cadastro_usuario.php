<!DOCTYPE html>
	<head>
			<link href="css/geral.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="css/style.css" />
			<script type="text/javascript" src="js/jquery.js"></script>
			<link rel="icon" type="image/png" href="img/logo.ico">
			<title>Humanize-se - Cadastro de Usu�rio</title>
			
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
					<a href="login.html"><img src="img/login.png" width="40%"></a><a href="cadastro_usuario.html"><img src="img/cadastrar.png" width="40%"></a>
				</div>
				
				<br>
				<table>
                	<form method="post" action="busca.php">
                            <tr>
                                <td><input type="text" name="buscaf" maxlength="90" style="transition: border 0.3s; width: 182; border-radius: 4px; border-width: 2px; border-style: solid; border-color: #bebebe"></td><td><input type="image" src="img/pesquisar.png" name="buscaf" width="60%"></td>
                            </tr>
                    </form>
				</table>
			</header>
			<div style="height:130px;">
            </div>
		

		<!-- CADASTRO DE USUARIO PHP-->
		<?php
		error_reporting(0);
        require 'conexao.php';
		
		
			//Upload de arquivos
            // verifica se foi enviado um arquivo
            if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
            {
                
             
                $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
                $nome = $_FILES['arquivo']['name'];
                 
                // Pega a extensao
                $extensao = strrchr($nome, '.');
             
                // Converte a extensao para mimusculo
                $extensao = strtolower($extensao);
             
                // Somente imagens, .jpg;.jpeg;.gif;.png
                // Aqui eu enfilero as extes�es permitidas e separo por ';'
                // Isso server apenas para eu poder pesquisar dentro desta String
                if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
                {
                    // Cria um nome �nico para esta imagem
                    // Evita que duplique as imagens no servidor.
                    $novoNome = md5(microtime()) . $extensao;
                     
                    // Concatena a pasta com o nome
                    $destino = 'upload/usuarios/' . $novoNome;
                     
                    // tenta mover o arquivo para o destino
                    if( @move_uploaded_file( $arquivo_tmp, $destino  ))
                    {
                        echo " ";
                        
                    }
                    else
                        echo "Erro ao salvar o arquivo. Aparentemente voc� n�o tem permiss�o de escrita.<br />";
                }
                else
                    echo "Voc� poder� enviar apenas arquivos *.jpg; *.jpeg;*.gif;*.png<br />";
            }
            else
            {
                echo "Voc� n�o enviou nenhum arquivo!";
            }
            	
		 	
         $nomep=$_POST['nomef'];
         $sexop=$_POST ['sexof'];
         $enderecop=$_POST['enderecof'];
         $telefonep=$_POST['telefonef'];
         $estadop=$_POST['estadof'];
         $cidadep=$_POST['cidadef'];
         $emailp=$_POST['emailf'];
         $datnascp=$_POST ['dataf'];
		 $senhap=$_POST ['senhaf'];
         $sql="insert into login(nome,sexo,endereco,telefone,estado,cidade,email,data,senha,foto)
          values('$nomep','$sexop','$enderecop','$telefonep','$estadop','$cidadep','$emailp','$datnascp','$senhap','$novoNome')";
          $resultado=mysqli_query($sql, $conexao);
          //verificando a inserção
          echo"
				<meta http-equiv=refresh content='0; URL=login.html';>
				<script type=\"text/javascript\">alert(\"Cadastrado com sucesso! Fa�a Login para continuar\");</script>";
     	?>
        
		

		<br><br><br>
		<footer>
				<div id="mapa">
					<table>
						<tr>
							<td><h1>HUMANIZE-SE</h1></td>
						</tr>
						<tr>
							<td><a href="index.html">P�gina Inicial</a></td>
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
