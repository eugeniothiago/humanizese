<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
	
		
        require 'conexao.php';
		
			session_start ();
    	 	$email =$_SESSION ['emailSession'];
		
		
			//Upload de arquivos
            // verifica se foi enviado um arquivo
            if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
            {
                
             
                $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
                $nome = $_FILES['arquivo']['name'];
                 
                // Pega a extensao
                $extensao = strrchr($nome, '.');
             
                // Converte a extensao para minusculo
                $extensao = strtolower($extensao);
             
                // Somente imagens, .jpg;.jpeg;.gif;.png
                // Aqui eu enfilero as extesões permitidas e separo por ';'
                // Isso serve apenas para eu poder pesquisar dentro desta String
                if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
                
                {
                    // Cria um nome único para esta imagem
                    // Evita que duplique as imagens no servidor.
                    $novoNome = md5(microtime()) . $extensao;
                     
                    // Concatena a pasta com o nome
                    $destino = 'upload/usuarios/' . $novoNome;
                     
                    // tenta mover o arquivo para o destino
                    if( @move_uploaded_file( $arquivo_tmp, $destino  ))

                        {
                            echo "Arquivo salvo com sucesso!";
                            
                        }
                    else
                        echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
                }
                else
                    echo "Você poderá enviar apenas arquivos *.jpg; *.jpeg;*.gif;*.png<br />";
            }
            else
            {
                echo "Você não enviou nenhum arquivo!";
            }
            echo " Nome do arquivo: $novoNome" ;
			$sql="UPDATE login SET foto='$novoNome' WHERE email='$email'";
			$resultado=mysqli_query($conexao,$sql);
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=paineluser.php'>";
			?>
</body>
</html>