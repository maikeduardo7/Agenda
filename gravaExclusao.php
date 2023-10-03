<?php

	include "conexao.php";
	include "validar.php";
	
	$Id = $_POST["txtId"];

		$sqlExclui ="DELETE FROM contatos WHERE id='$Id'";
		
		$sqlExclui=mysql_query($sqlExclui)  or die ("Não foi possivel excluir o contato");
		
		mysql_close($banco);
		
		header("location: confirm.php");	
	
?>

