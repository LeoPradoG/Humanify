<?php

    $servername = "localhost"; // Nome do servidor MySQL (pode ser "localhost" na maioria dos casos)
    $username = "Desenvolvimento"; // Nome de usuário padrão do MySQL no XAMPP
    $password = "$@pRus70n#"; // Senha padrão em branco (você pode definir uma senha durante a instalação)
    $dbname = "portal_ruston"; // Nome do banco de dados que você deseja se conectar

    // Cria a conexão
    $conn_mysql = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn_mysql->connect_error) {

        die("Falha na conexão: " . $conn_mysql->connect_error);

    } else {

        //echo "Conexão bem-sucedida!";
    }


?>

