<?php


    include '../../conexao_pgsql.php';

    $usuario = $_POST['Login'];
    $NewPassWord = $_POST['NewPassWord'];
    $OldPassWord = $_POST['oldPassWord'];

    $usuarioUPPER = strtoupper($usuario);
    $OldPassWordUPPER = strtoupper($OldPassWord);

    $Consulta = "SELECT usu.id_usuario,
                    usu.nm_usuario,
                    sen.ds_senha,
                    usu.sn_primeiro_acesso
                FROM usuarios usu
                INNER JOIN usu_senhas sen
                ON sen.ID_USUARIO = usu.ID_USUARIO
                WHERE UPPER(sen.ds_senha) = '$OldPassWordUPPER'
                AND UPPER(usu.nm_usuario) = '$usuarioUPPER'";

                $resultado = pg_query($conn, $Consulta);

    $validador = pg_num_rows($resultado);
    
    if($validador == 0){

        echo 0;

    }else{

        $row = pg_fetch_assoc($resultado);

        $Line_usu =  $row['nm_usuario'];
        $Line_pass = $row['ds_senha'];
        $Line_ID = $row['id_usuario'];

        if($Line_usu == '' || $Line_pass == '' || $Line_ID == ''){

            echo 0;

        }else{

            $updatePass = "UPDATE usu_senhas 
                            SET ds_senha = '$NewPassWord'
                            WHERE ID_USUARIO = $Line_ID";

            $resultado = pg_query($conn, $updatePass);

            if($resultado){

                $updatePass = "UPDATE usuarios 
                                SET sn_primeiro_acesso = 'N'
                                WHERE ID_USUARIO = $Line_ID";

                $resultado = pg_query($conn, $updatePass);

                if($resultado){

                    echo 1;

                }else{

                    echo 0;

                }

            }else{

                echo 0;

            }
        }


    }

    
?>