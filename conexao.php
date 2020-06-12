<?php
		$servidor='localhost';
		$usuario='root';
		$senha='';
		$db='site';
		
		$conexao=mysqli_connect($servidor,$usuario,$senha,$db);
		if($conexao=mysqli_connect($servidor,$usuario,$senha,$db))
				{	
					if(!mysqli_select_db($db,$conexao))
						{
							echo 'Não foi possível selecionar o Banco de dados';
						}
				}

				else
					{
						echo 'Não foi possível conectar ao Banco de dados';
					}
?>