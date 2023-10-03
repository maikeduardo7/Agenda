<?php 
	include "conexao.php";
					
			if(isset($_GET['nome'])&& $_GET['nome'] != '')
	{

			$registro = array();
			
			$registro['id'] = $_GET['id'];
			
	}			
					
			$registro = buscar_registro($_GET['id']);
			
			
			include "Edicao.php";
?>