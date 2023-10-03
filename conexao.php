<?php 
	
	$host="";
	$usuario="";
	$senha="";
	$banco= mysql_connect($host, $usuario, $senha) or die ("Não foi possivel fazer a conexão com bando de dados");
	
	mysql_select_db("evoteste", $banco) or die ("Não foi possivel encontrar o banco de dados");
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_conncection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	
	function busca_registros($banco)
	{
		$sqlBusca = 'SELECT * FROM contatos';
		$resultado = mysql_query($sqlBusca);
		
		$lista = array();
		
		while($registro = mysql_fetch_assoc($resultado))
		{
			$lista[] = $registro;
		}
		
		return $lista;
	}
	
	function buscar_registro($id)
	{
		$sqlBusca = "SELECT id, nome, email, telefone, datanascimento FROM contatos where id={$id}";
		$resultado = mysql_query($sqlBusca);
				
		return mysql_fetch_assoc($resultado);
	}
	
?>
	
