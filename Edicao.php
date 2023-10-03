﻿<!DOCTYPE html>

<br>
<br>
<br>

<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda - Editar Contato</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
	
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
	
  </head>
	
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
	
		<form method="POST" action ="gravaEdicao.php" id="gravaEdicao" name="gravaEdicao">
			
		<div class="Titulo">Editar Contato</div>
			
			<hr style="height: 1px; background-color: green">

				<div class="row">
			
					<!-- CAMPO ID ------------------------------------------------------------------------------------------------------------------------------------------------------>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<label>Id:</label>
							<input type="text" id="txtId" name="txtId" readonly="true" size="10px" value="<?php echo $registro['id']?>" />
						
						<br>
						<br>
						
					<!-- CAMPO NOME ------------------------------------------------------------------------------------------------------------------------------------------------------>
						<label>Nome:</label>

							<input type="text" id="txtNome" name="txtNome" size="50px" value="<?php echo $registro['nome']?>" />

						<br>
						<br>
						
					<!-- CAMPO EMAIL ------------------------------------------------------------------------------------------------------------------------------------------------------>
						<label>E-mail:</label>
											
							<input type="text" id="txtEmail" name="txtEmail" size="50px" value="<?php echo $registro['email']?>" />

						<br>
						<br>
						
					<!-- CAMPO TELEFONE ------------------------------------------------------------------------------------------------------------------------------------------------------>
						<label>Telefone:</label>
											
							<input type="text" id="txtTelefone" name="txtTelefone" size="30px" value="<?php echo $registro['telefone']?>" />	

						<br>
						<br>
						
					<!-- CAMPO DATA DE NASCIMENTO ---------------------------------------------------------------------------------------------------------------------------------------->
						<label>Data de Nascimento:</label>
					
							<input type="date" id="data" name="data" min="1800-01-01" value="<?php echo $registro['datanascimento'];?>"/>					  
						
						 <br>
						  
						  <hr style="height: 1px; background-color: green">
					  
					</div>
				  
				</div>
				
				<button data-toggle="collapse" data-target="#gravaEdicao" type="Submit" class="btn btn-success"><img src="img/save.png" width="20px" height="20px">&nbsp Salvar</button>

		</form>
		

	</div>	

	</font>

</main>

  </body>
</html>

		
