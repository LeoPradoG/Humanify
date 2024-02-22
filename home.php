<?php

    include 'cabecalho.php';
    include 'conexao_pgsql.php';

    $sessionid = $_SESSION['usuario'];
    $sessionidCode = $_SESSION['id'];

    $consultaAcess = "SELECT acess.ID_NIVEL_ACESSO
                      FROM nivelacessousuario acess
                      WHERE acess.ID_usuario = $sessionidCode";

    $resultadoAcess = pg_query($conn, $consultaAcess);      
    
    $validadorAcess = pg_num_rows($resultadoAcess);

    if($validadorAcess == 0){

        echo 'Você Não Possui acesso aos Modulos! Contate o Administrador.';

    } else {

        $acessos = array(); 

        // Loop através das linhas do resultado
        while($linha = pg_fetch_assoc($resultadoAcess)){

            // Acesse cada coluna pelo nome da coluna
            $id_nivel_acesso = $linha['id_nivel_acesso'];

            // Adicione o ID de nível de acesso ao array de acessos
            $acessos[] = $id_nivel_acesso;

        }

        // Atribua o array de acessos à session
        $Acess = $_SESSION['acessos'] = $acessos;

    }
    
?>

<div class="div_br"></div>


<div id="tabs"></div>






<script>


    window.onload = function() {

        $('#tabs').load('funcoes/tabs/loadtabs.php');

    }

    function redirect_user(parameter){

        if(parameter == 1){

            setTimeout(function(){location.href="acessos.php"} , 1000);  

        }

    }

    window.onload = function() {

        $('#tabs').load('funcoes/tabs/loadtabs.php');


    }

   
    function ExitTheSystem() {

        setTimeout(function() {

            // Redirecionar para outra página
            window.location.href = "index.php";

        }, 1000);

    }


    /////////////////////////////////////////

    //BLOCO QUE SOLICITA A LOCALIZAÇÃO///


    // Verifica se o navegador suporta a API de Geolocalização
    if (navigator.geolocation) {

        // Solicita a geolocalização do usuário
        navigator.geolocation.getCurrentPosition(function (position) {

            // Callback de sucesso, position contém as informações de geolocalização
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            // Faça algo com as coordenadas, por exemplo, exiba em console
            console.log('Latitude: ' + latitude + ', Longitude: ' + longitude);

        }, function (error) {

            // Callback de erro, tratamento de erros
            console.error('Erro ao obter a geolocalização: ' + error.message);
        });

    } else {

        // O navegador não suporta a API de Geolocalização
        console.error('Seu navegador não suporta a API de Geolocalização.');
    }
        
    /////////////////////////////////////////////////


</script>


<?php


    include 'rodape.php';


?>