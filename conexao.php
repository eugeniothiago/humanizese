<?php
		$servidor='localhost';
		$usuario='root';
		$senha='';
		$db='site';
		
		$conexao=mysqli_connect($servidor,$usuario,$senha,$db);
		if($conexao=mysqli_connect($servidor,$usuario,$senha,$db))
				{	
					if(!mysqli_select_db($conexao,$db))
						{
							echo 'Não foi possível selecionar o Banco de dados';
						}
				}

				else
					{
						echo 'Conectado com sucesso!';
					}
?>