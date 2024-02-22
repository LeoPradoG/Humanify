<?php

    session_start();

    include '../../conexao_pgsql.php';

    //RECEBENDO VALORES DE LOGIN
    $usuario = $_POST['var_login'];
    $senha = $_POST['var_senha'];

    //VERIFICANDO EXISTENCIA DO USUARIO NO BANCO DE DADOS PGSQL
    $Consulta = "SELECT usu.nm_usuario,
                    sen.ds_senha
                 FROM usuarios usu
                 INNER JOIN usu_senhas sen
                 ON sen.ID_USUARIO = usu.ID_USUARIO
                 WHERE sen.ds_senha = '$senha'
                 AND usu.nm_usuario = '$usuario'";

    $resultado = pg_query($conn, $Consulta);
    $row = pg_fetch_assoc($resultado);

    //EXTRAINDO VALORES PARA FAZER VALIDAÇÃO
    $Line_usu =  $row['nm_usuario'];
    $Line_pass = $row['ds_senha'];

    if($Line_usu == '' || $Line_pass == ''){

        echo 0;

    }else{

        echo 1;

    }

    //SALVANDO VALOR DO USUARIO NA SESSÃO 
    $_SESSION['usuario'] = $Line_usu; 



?>