<?php

    $pns = $_POST['array_pn'];
    $SessionId = $_POST['SessionId'];

    require '../../vendor/autoload.php';

    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7\Request;
    use GuzzleHttp\Exception\RequestException;
    
    $client = new Client([

        'verify' => false, // Desativa a verificação do certificado SSL

    ]);
    
    $headers = [

        'SessionId' => $SessionId,
        'Cookie' => "B1SESSION=$SessionId; CompanyDB=Desenvolvimento",
        'Content-Type' => 'application/json', // Adiciona o cabeçalho Content-Type

    ];
    
    // Constrói o corpo da requisição com os dados que você deseja atualizar
    $body = json_encode([
        'Valid' => false // Define o campo para desativar o parceiro de negócios
    ]);
    
    // Atualiza a URL para usar a variável $pns
    $request = new Request('PATCH', "https://srvdv01:30030/b1s/v1/BusinessPartners('$pns')", $headers, $body);
    
    try {

        $res = $client->sendAsync($request)->wait();
        $jsonResponse = $res->getBody();
    
        // Envia o cabeçalho indicando que o conteúdo é JSON
        header('Content-Type: application/json');
    
        // Retorna a resposta JSON ao JavaScript
        echo $jsonResponse;

    } catch (RequestException $e) {

        // Retorna um erro em formato JSON
        echo json_encode(['error' => 'Erro na solicitação: ' . $e->getMessage()]);

    }



?>