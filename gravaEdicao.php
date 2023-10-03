<?php

	include "conexao.php";
	include "validar.php";
	
	$Id = $_POST["txtId"];
	$nome = $_POST['txtNome'];
	$email = $_POST['txtEmail'];
	$telefone = $_POST['txtTelefone'];
	$datanascimento = $_POST['data'];
	$usuario = $_SESSION['txtUsuario'];


	$newDate = date("Y-m-d", strtotime($datanascimento));

		$sqlEdit ="UPDATE contatos SET nome='$nome', email='$email', telefone='$telefone', datanascimento='$newDate' WHERE id='$Id'";
		
		$queryEdit=mysql_query($sqlEdit)  or die ("Não foi possivel alterar informações do contato");
		
		mysql_close($banco);
		
		header("location: confirm.php");
	
?>

