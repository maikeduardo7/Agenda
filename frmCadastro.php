<!DOCTYPE html>

<?php include "conexao.php"; ?>
<?php include "validar.php"; ?>
<?php include "plugin.php"; ?>

<?php
	error_reporting(0);
	ini_set(“display_errors”, 0 );
?>

<br>
<br>
<br>

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
	
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
	
	</head>
	
	<script>
		function somenteNumeros(num)
		{
			var er = /[^0-9.]/;
			er.lastIndex = 0;
			var campo = num;
			if (er.test(campo.value)) {
			  campo.value = "";
			}
		}
	</script>
	
  <body>
	
		<font face="Calibri">

    <main class="container-fluid">

		<div class="row">
		<div class="col-md-12">
		
			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
				
				
				<div class="navbar-header">
						 
					</button><a class="navbar-brand" href="Agenda.php"><img src="img\back1.png" width="25" height="25"></a>
				</div>
				
								
			</nav>
		</div>
	</div>
	
		<form method="POST" action ="gravar.php" id="Salvar" name="Salvar">

				<div class="row">
			
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<div class="Titulo">Novo Contato</div>

						<hr style="height: 1px; background-color: gray">

						<!-- CAMPO ID ------------------------------------------------------------------------------------------------------------------------------------------------------>
						<label>Id:</label><br>

							<input type="text" id="txtId" name="txtId" readonly="true" size="5px" />
						
						<br>
						<br>
						  
						<!-- CAMPO NOME -------------------------------------------------------------------------------------------------------------------------------------------->
						<label for="txtNome"> Nome:</label><br>

						  <input type="text" id="txtNome" name="txtNome" class="txtNome" size="50" value=""/>
						  
						<br>
						<br>

						<!-- CAMPO EMAIL -------------------------------------------------------------------------------------------------------------------------------------------->
						<label for="txtEmail"> E-mail:</label><br>
						
						  <input type="text" id="txtEmail" name="txtEmail" class="txtEmail" size="50" value=""/>
						  
						<br>
						<br>

						<!-- CAMPO TELEFONE -------------------------------------------------------------------------------------------------------------------------------------------->
						<label for="txtTelefone"> Telefone:</label><br>
						
						  <input type="text" id="txtTelefone" name="txtTelefone" class="txtTelefone" onkeyup="somenteNumeros(this)" size="28" value=""/>
						  
						<br>
						<br>

						  <!-- CAMPO DATA DE NASCIMENTO ---------------------------------------------------------------------------------------------------------------------------------------->
							<label>Data:</label><br>
							<input type="date" id="data" name="data" min="1800-01-01" value="">
						  
						<hr style="height: 1px; background-color: gray">
					  
					</div>
				  
				</div>
				
				<button data-toggle="collapse" data-target="#Salvar" type="Submit" class="btn btn-success"><img src="img/save.png" width="20px" height="20px">&nbsp Salvar</button>
				<button data-toggle="collapse" data-target="#Cancelar" type="Reset" class="btn btn-danger"><img src="img/cancel.png" width="20px" height="20px">&nbsp Cancelar</button>

		</form>
		
	</div>	

</main>
    
</font>

  </body>
  <br>
</html>

		
