<!DOCTYPE html>

<?php include "conexao.php"; ?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ConPort</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<style type="text/css">
	.login-page
	{
    background-image: url('img/fundo.jpg');
    background-repeat: no-repeat;
    background-size:100%;
    bottom: 0;
    color: black;
    left: 0;
    overflow: auto;
    padding: 4em;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
	background-size:cover;
	}
	
	</style>
	
  	</head>
  
  <body class="login-page">

    <main class="container-fluid">
		<div class="col-md-12">
			
				<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
					
					<div class="navbar-header">
						 
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							 
						</button><a class="navbar-brand textoSombra" href="#">Agenda</a>
					</div>
					
				</nav>
			</div>
	
	
	<!-- Login -->
	<div class="row">
		<div class=" col-sm-6 col-xs-10 col-md-4 col-lg-4 col-xs-offset-1 col-sm-offset-3 col-lg-offset-4">
		
			<!-- Caixa de Login -->
				<form action="acesso.php" method="POST">
					<center>
						<br>
						
						<img src="img\agenda.png" width="128" height="128" alt="Agenda">
						
						<br>
						<br>
						<br>
						
						<div class=form-group> <input name="txtUsuario" type=text class="form-control input-underline input-lg" placeholder=Usuario> </div>
						<div class=form-group> <input name="txtPass" type=password class="form-control input-underline input-lg" placeholder=Password> </div>
						
						<br>
						<input class="botao" type="submit" name="btnEntrar" id="btnEntrar" value="Entrar" />
					</center>
				</form>
				<br>
				<br>

			
		</div>
	
	</div>
	
	 </main>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
		
  </body>
</html>