<?php

    include 'cabecalho.php';

    $sessionid = $_SESSION['usuario'];
    $sessionAcess = $_SESSION['Acess'];
    $sessionDsAcess = $_SESSION['DsAcess'];



?>

<div class="div_br"></div>


<div id="tabs"></div>


<script>


    window.onload = function() {

        $('#tabs').load('funcoes/tabs/loadtabs.php');

    }

    function redirect_user(parameter){

        if(parameter == 1){

            setTimeout(function(){location.href="inativacao.php"} , 1000);  

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