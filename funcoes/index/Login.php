<?php

    session_start();

    include '../../conexao_pgsql.php';

    //RECEBENDO VALORES DE LOGIN
    $usuario = $_POST['var_login'];
    $senha = $_POST['var_senha'];

    //VERIFICANDO EXISTENCIA DO USUARIO NO BANCO DE DADOS PGSQL
    $Consulta = "SELECT 
                    s.ID_USUARIO,
                    s.NM_USUARIO,
                    x.DS_SENHA,
                    ARRAY_AGG(y.ID_NIVEL_ACESSO) AS ID_NIVEIS_ACESSO,
                    ARRAY_AGG(z.DS_NIVEL_ACESSO) AS DS_NIVEIS_ACESSO
                FROM usuarios s
                INNER JOIN usu_senhas x ON x.ID_USUARIO = s.ID_USUARIO
                INNER JOIN nivelacessousuario y ON y.ID_USUARIO = s.ID_USUARIO
                INNER JOIN nivelacesso z ON z.ID_NIVEL_ACESSO = y.ID_NIVEL_ACESSO
                WHERE UPPER(s.nm_usuario) = '$usuario'
                AND UPPER(x.ds_senha) = '$senha'
                GROUP BY s.ID_USUARIO, s.NM_USUARIO, x.DS_SENHA";

    $resultado = pg_query($conn, $Consulta);
    $row = pg_fetch_assoc($resultado);

    //EXTRAINDO VALORES PARA FAZER VALIDAÇÃO
   echo $Line_usu =  $row['nm_usuario'];
   echo $Line_pass = $row['ds_senha'];
   echo $LineAcess = $row['ID_NIVEIS_ACESSO'];
   echo $LineDsAcess = $row['DS_NIVEIS_ACESSO'];

    /*
    if($Line_usu == '' || $Line_pass == ''){

        echo 0;

    }else{

        echo 1;

    }

    //SALVANDO VALOR DO USUARIO NA SESSÃO 
    $_SESSION['usuario'] = $Line_usu; 

    //SALVANDO VALOR DO ACESSO NA SESSÃO
    $_SESSION['Acess'] = $LineAcess; 
    $_SESSION['DsAcess'] = $LineDsAcess; 
    */


?>