<?php

	session_start();
	if ( ! isset($_SESSION["txtUsuario"]))
	{

		 header("location: frmLogin.php");
		 
	}


?>