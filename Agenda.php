<!DOCTYPE html>

<?php include "conexao.php"; ?>
<?php include "validar.php"; ?>
<?php include "plugin.php"; ?>

<?php
$query = mysql_query("SELECT Id, Nome, Email, Telefone,DataNascimento FROM contatos where usuario= '$_SESSION[txtUsuario]'");
?>

<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

  	<main class="container-fluid">
		  <font face="Calibri">
		<div class="row">

			<div class="col-md-12">
			
				<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
					
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="nav navbar-nav navbar-right">
							
							<li>
								<a href="logout.php"><font face='Calibri'><img src="img/logoff.png" width="20" height="20"><b>&nbsp Logoff</b></font></a>
							</li>
							
							<li>
								<a href="Sobre.php"><font face='Calibri'><img src="img/help2.png" width="20" height="20"><b>&nbsp Sobre &nbsp</b></font></a>
							</li>

						</ul>
						
					</div>
					
				</nav>

			</div>

		</div>
	</main>

<main class="container">
	<div class="row">

		<div class="col-md-12">

			<center><img alt="Contatos" src="img/contact.png" width="100px" height="100px" style="margin-top:50px" ></center>
		
		</div>

	</div>

	<br>
	<br>		

		<fieldset>		

			<legend>Contatos</legend>	

				<a type="submit" class="btn btn-success" href="frmCadastro.php"><img title='Novo' src='img/user2.png' width='24' height='24'>&nbsp Novo</a>
				<a type="submit" class="btn btn-warning" href="Agenda.php"><img title='Atualizar' src='img/atualiza.png' width='24' height='24'>&nbsp Atualizar</a>
				<button type="button" data-toggle="collapse" data-target="#pesquisa" class="btn btn-primary" href=""><img title='Pesquisar' src='img/consulta.png' width='24' height='24'>&nbsp Pesquisar</button>

		<form method="post" action ="Agenda.php">

			<div id="pesquisa" class="collapse">
			
				<br>
			
				<div class="row">
				
					<div class="col-lg-12 col-xs-1">
					
						<label>Nome:</label>
					
							<input type="text" id="txtPesqNome" name="txtPesqNome" class="txtPesqNome" value=""></input>
								
						<label> Telefone:</label>
						
							<input type="text" id="txtPesqTelefone" name="txtPesqTelefone" class="txtPesqTelefone" value=""></input>											

							<button name="btnListar" id="btnListar" class="btn btn-default"><img src="img/down.png" width="27px" height="27px">&nbsp Listar</button>
							
					</div>
						
				</div>

			</div>

		</form>

		<br>
		
			<table width = "100%" border = "0" cellspacing = "0" cellpadding = "0" style="padding:200px 0px 0px 0px">
				<tr>
					<td>
						<table width = "100%" border = "0" cellspacing = "0" cellpadding = "0">
							<tr class="MenuGradient">
								<td> <center> <b> <font color = "Black">  </center> </b> </font> </td>
								<td> <center> <b> <font color = "Black"> Id </center> </b> </font> </td>
								<td> <center> <b> <font color = "Black"> Nome </center> </b> </font> </td>
								<td> <center> <b> <font color = "Black"> Email </center> </b> </font> </td>
								<td> <center> <b> <font color = "Black"> Telefone </center> </b> </font> </td>
								<td> <center> <b> <font color = "Black"> DataNascimento </center> </b> </font> </td>
								<td> <center> <b> <font color = "Black"> Opções </center> </b> </font> </td>
							</tr>
								<?php 

									

									if(isset($_POST['txtPesqNome']))
									{
								
										$sql= "SELECT Id, Nome, Email, Telefone,DataNascimento FROM contatos where (nome='$_POST[txtPesqNome]' or telefone='$_POST[txtPesqTelefone]') AND usuario= '$_SESSION[txtUsuario]'";							
										
									}
									else
									{
										$sql= "SELECT Id, Nome, Email, Telefone,DataNascimento FROM contatos where usuario= '$_SESSION[txtUsuario]'";							
									}

									unset($_POST['txtPesqNome']);

									unset($_POST['txtPesqTelefone']);

									$query =  mysql_query($sql);
									
									$bgcolor="white";
									$tamanho="2px";
											
									while($resultado = mysql_fetch_array($query))
									{
																	
										if ($bgcolor=="white")
											$bgcolor="#E6E6E6";
										else
											$bgcolor="white";
											$date = traduz_data_exibir($resultado['DataNascimento']);
											
										print "
										<tr bgcolor='#E6E6E6'>
										<td bgcolor= \"$bgcolor\"> <center> <font size=\"$tamanho\"><img title='Contact' src='img/user.png' width='35' height='35'></a></td>
										<td bgcolor= \"$bgcolor\"> <center> <font size=\"$tamanho\"> $resultado[Id]</center></font></td>
										<td bgcolor= \"$bgcolor\"> <center> <font size=\"$tamanho\"> $resultado[Nome]</center></font></td>
										<td bgcolor= \"$bgcolor\"> <center> <font size=\"$tamanho\"> $resultado[Email]</center></font></td>
										<td bgcolor= \"$bgcolor\"> <center> <font size=\"$tamanho\"> $resultado[Telefone]</center></font></td>
										<td bgcolor= \"$bgcolor\"> <center> <font size=\"$tamanho\"> $date</center></font></td>
										<td bgcolor= \"$bgcolor\"> <center> <font size=\"$tamanho\"> <a href='editar.php?id=$resultado[Id]'><img title='Editar' src='img/edit.png' width='24' height='24'></a>
										<font size=\"$tamanho\"> <a href='excluir.php?id=$resultado[Id]'><img title='Excluir' src='img/delete.png' width='24' height='24'></a>
										</td>
										</tr>";
											
									}
										
								?>
						</table>
					</td>
				</tr>
			</table>
		
		</fieldset>

</main>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
								</font>
  	</body>
  	<br>
</html>