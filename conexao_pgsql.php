<?php

    $host = '192.168.0.80';
    $dbname = 'SYS';
    $username = 'postgres';
    $password = 'bdserver2@24';

    $conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

    if (!$conn) {

        echo "Erro na conexão.\n";
        exit;

    } else {

       // echo "Conexão bem sucedida.\n";
    }


?>
