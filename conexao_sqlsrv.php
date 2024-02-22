<?php

    $serverName = "SRVDV01"; // Nome do servidor SQL Server

    $connectionOptions = array(
        "Database" => "Desenvolvimento", // Nome do banco de dados
        "Uid" => "SA", // Nome de usuário
        "PWD" => "Inf0@Rust0n" // Senha
    );

    // Estabelecer a conexão
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if (!$conn){

        echo 'Erro na conexão com o SQL Server: ' . sqlsrv_errors();
        
    }else{

       //echo 'Conectado ao Banco de Dados SQL SERVER - Desenvolvimento.';

        // Executar uma consulta

        /*$query = "SELECT * FROM OUSR";
        $result = sqlsrv_query($conn, $query);

        if ($result === false) {

            echo 'Erro na consulta: ' . sqlsrv_errors();
        }
        */
    }



// Fechar a conexão
//sqlsrv_close($conn);
