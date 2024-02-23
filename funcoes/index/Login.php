<?php

    session_start();

    include '../../conexao_pgsql.php';

    //RECEBENDO VALORES DE LOGIN
    $usuario = $_POST['var_login'];
    $senha = $_POST['var_senha'];

    
    //VERIFICANDO EXISTENCIA DO USUARIO NO BANCO DE DADOS PGSQL
    $Consulta = "SELECT usu.id_usuario,
                        usu.nm_usuario,
                        sen.ds_senha,
                        usu.sn_primeiro_acesso
                 FROM usuarios usu
                 INNER JOIN usu_senhas sen
                 ON sen.ID_USUARIO = usu.ID_USUARIO
                 WHERE UPPER(sen.ds_senha) = '$senha'
                 AND UPPER(usu.nm_usuario) = '$usuario'";

    $resultado = pg_query($conn, $Consulta);

    $validador = pg_num_rows($resultado);

    if($validador == 0){

        echo 0;

    }else{

        $row = pg_fetch_assoc($resultado);

        //EXTRAINDO VALORES PARA FAZER VALIDAÇÃO
        $Line_usu =  $row['nm_usuario'];
        $Line_pass = $row['ds_senha'];
        $Line_id = $row['id_usuario'];
        $Line_SN = $row['sn_primeiro_acesso'];

        if($Line_usu == '' || $Line_pass == '' || $Line_id == ''){
            
            echo 0;
    
        }else{

            if($Line_SN == 'S'){

                echo 2;
                
            }else{

                echo 1;

            }
    
            
    
        }
            
        //SALVANDO VALOR DO USUARIO NA SESSÃO 
        $_SESSION['usuario'] = $Line_usu; 
        $_SESSION['id'] = $Line_id;

    }




?>