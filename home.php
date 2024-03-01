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

    <!--<div style="width: 100%; height: auto; padding: 15px 15px 15px 15px;">

        <div onclick="redirect_user(1)"style="cursor: pointer; width: 200px; height: 130px; border: solid 1px #c7bdbd; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 5px;">

            <div style="width:100%; height:20%; text-align: center; padding-top: 5px;">

                <span style="font-weight: bold; color:#999494; font-size: 15px;">Administração</span>
                
            </div>

            <div style="width:100%; height:80%;display: flex; align-items: center; justify-content: center; font-size: 50px;">

                <i class="fa-solid fa-gear"></i>

            </div>

        </div>

    </div>-->


    <div style="height: 400px; width: 100%;" id="map"></div>




<script>


    function ExitTheSystem() {

        setTimeout(function() {

            // Redirecionar para outra página
            window.location.href = "index.php";

        }, 1000);

    }


    /////////////////////////////////////////

    //BLOCO QUE SOLICITA A LOCALIZAÇÃO///


    //CRIANDO MAPA


    // Verifica se o navegador suporta a API Geolocation
    if ("geolocation" in navigator) {

    // Solicita a geolocalização do usuário
    navigator.geolocation.getCurrentPosition(function(position) {

        // Obtém as coordenadas de latitude e longitude
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        //manda Geolocalização para construção do mapa
        initMap(latitude,longitude)

    });

    } else {

    // Navegador não suporta Geolocation API
    console.log("Geolocalização não suportada pelo navegador.");
    }


    (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
        key: "AIzaSyAIU_Krkq-uT47vZs1k74oxHJPPMT-sR-s",});


    let map;

    async function initMap(latitude,longitude) {

        console.log(latitude);
        console.log(longitude);

        const position = { lat:latitude, lng:longitude};
        // Request needed libraries.
        //@ts-ignore
        const { Map } = await google.maps.importLibrary("maps");
        const { AdvancedMarkerView } = await google.maps.importLibrary("marker");

        // The map, centered at Uluru
        map = new Map(document.getElementById("map"), {
            zoom: 4,
            center: position,
            mapId: "DEMO_MAP_ID",
        });

        // The marker, positioned at Uluru
        const marker = new google.maps.marker.AdvancedMarkerElement({
            map: map,
            position: position,
            title: "Uluru",
        });

    }


        

</script>

<?php


    include 'rodape.php';


?>