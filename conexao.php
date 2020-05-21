<?php
$servidor='localhost';
		$usuario='root';
		$senha='';
		$db='site';
		
		if($conexao=mysql_connect($servidor,$usuario,$senha)){	
					if(!mysql_select_db($db,$conexao)){
						echo 'Não foi possível selecionar o Banco de dados';
					}
				}

				else{
					echo 'Não foi possível conectar ao Banco de dados';
				}
?>