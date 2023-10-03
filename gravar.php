<?php
	include "conexao.php";
	include "validar.php";
	
	$id = $_POST['txtId'];
	$nome = $_POST["txtNome"];
	$email = $_POST["txtEmail"];
	$telefone = $_POST["txtTelefone"];
	$datanascimento = $_POST["data"];
	$usuario = $_SESSION["txtUsuario"];

	if ( $id == "")
	{
	
	$sql = "SELECT id FROM contatos where nome='$_POST[txtNome]' and usuario='$_SESSION[txtUsuario]'";

		$query=mysql_query($sql);

		$linhas = mysql_num_rows($query);

		if($linhas == 0) 
		{

			$sql ="INSERT INTO contatos(id, nome, email, telefone, datanascimento, usuario) values (null,'$nome','$email','$telefone','$datanascimento','$usuario')";
			
			$query=mysql_query($sql)  or die ("houve um erro na gravação dos dados, verifique os valores passados");
			
			mysql_close($banco);
			
			header("location: confirm.php");

		}
		else 
		{
		
			header("location: msgDuplicado.php");

		}
		
	}
	
?>

