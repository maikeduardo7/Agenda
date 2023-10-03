<?php

	include ("conexao.php");
	
	$login = $_POST["txtUsuario"];
	$senha = $_POST["txtPass"];
	
	$sql = "SELECT * FROM users WHERE nome = '$login' and password = '$senha'";
	$query = mysql_query($sql);
	
	$linhas = mysql_num_rows($query);
	
	if($linhas == 0)
	{

		header("location: msg.php");
		
	}
	else
	{
		session_start();
		$_SESSION["txtUsuario"]= $login;
		$_SESSION["txtPass"]= $senha;
		
		header("location: Agenda.php");
	}