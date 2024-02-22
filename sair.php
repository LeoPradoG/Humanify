<?php

	session_start();
	
	unset(

		$_SESSION['usuario'],
		$_SESSION['acesso'],

	);
	
	
	//redirecionar o usuario para a página de login
	header("Location: index.php");

?>