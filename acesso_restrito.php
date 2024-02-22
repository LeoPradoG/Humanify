<?php

	// Se o usuário não está logado, manda para página de login.
	if (!isset($_SESSION['usuario'])){
		
		unset(

			$_SESSION['cd_usuario'],
			$_SESSION['usuario'],
			$_SESSION['acesso'],
			$_SESSION['adm'],
		);
        
		header("Location: index.php");
		
	};

?>