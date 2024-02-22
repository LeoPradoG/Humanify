
<?php

   session_start();

   $usuario = $_POST['var_login'];
   $senha = $_POST['var_senha'];

   // Constrói os parâmetros para a solicitação
    $dados = array(
        "CompanyDB" => "Desenvolvimento",
        "Password" => $senha,
        "UserName" => $usuario
    );

    // Converte os dados para formato JSON
    $jsonData = json_encode($dados);

    // URL de destino
    $url = "https://srvdv01:30030/b1s/v1/Login";

    // Inicializa a sessão cURL
    $ch = curl_init();

    // Configura as opções da sessão cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Desabilita a verificação SSL

    // Executa a solicitação cURL e armazena a resposta
    $response = curl_exec($ch);

    // Verifica por erros
    if (curl_errno($ch)) {
        echo 'Erro na requisição cURL: ' . curl_error($ch);
    }

    
    $responseData = json_decode($response, true);

    // Verifica se o login foi bem-sucedido
    if (isset($responseData['SessionId'])) {
        // Armazena o ID da sessão na variável de sessão do PHP
        $_SESSION['user_session_id'] = $responseData['SessionId'];
    }
    

    // Fecha a sessão cURL
    curl_close($ch);

    // Retorna a resposta para o JavaScript
    echo $response;


?>

