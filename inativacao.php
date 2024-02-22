<?php

    include 'cabecalho.php';

    
?>

<div id="inativacaoPN"></div>
<div style="background-color: red;">

<button onclick="RequestSapB1PN()">+</button>

</div>

<script>

    
    window.onload = function() {

        $('#inativacaoPN').load('funcoes/parceiro/inativacaoPN.php');

    }

    //variavel global 
    global_valores = '';


    // Inicializa um array vazio para armazenar os valores
    var listaValores = [];

    function checked_pn(parameter){

        var checkbox = document.getElementById("checked_parceiro_"+parameter);

        if (checkbox.checked) {

            console.log("O checkbox foi marcado.");

            if(parameter.trim() !== ''){
                
                if(!listaValores.includes(parameter)){

                    listaValores.push(parameter);
                    console.log('Parâmetro adicionado à lista:', parameter);

                }else{

                    console.log('Valor Já existente na lista!');
                }

                console.log(listaValores);

            }

        }else {
            
            console.log("O checkbox não foi marcado.");

            // Remover o valor da lista se o checkbox foi desmarcado
            var index = listaValores.indexOf(parameter);

            if (index !== -1) {

                listaValores.splice(index, 1);
                console.log('Parâmetro removido da lista:', parameter);
            }

            console.log(listaValores);

        }

        global_valores = listaValores;
        

    }

    
    function RequestSapB1PN(){

        global_valores;

        if(global_valores == null || global_valores == ''){

            console.log('Selecione Algum Valor');

        }else{

            //GERANDO UM LOGIN NO SAP B1 COM MANAGER

            $.ajax({
                url: "funcoes/index/loginB1.php",
                type: "POST",
                data: {
                    var_login: 'manager',
                    var_senha: 'trusted'
                },
                cache: false,
                success: function(dataResult) {
                    // Convertendo a resposta JSON para um objeto JavaScript
                    var responseData = JSON.parse(dataResult);

                    // Verificando se há um erro na resposta
                    if (responseData.error) {

                        // Caso haja um erro
                        console.error("Erro durante o login:", responseData.error.message.value,'Contate o Administrador do Sistema!');

                    }else{

                        // Caso o login seja bem-sucedido
                       console.log("ID da Sessão:", responseData.SessionId);
                       //console.log("Versão:", responseData.Version);
                       //console.log("Timeout da Sessão:", responseData.SessionTimeout);

                       UpdateStatusPN(responseData.SessionId, global_valores);

                    }
                }
            });

        }


    }


    function UpdateStatusPN(SessionId, global_valores){

            valores_array = global_valores.length;

        for(i = 0; i < valores_array; i++){

            array_pn = global_valores[i];

            $.ajax({

                url: "funcoes/parceiro/InativarParceiro.php",
                type: "POST",
                data: {
                    
                    array_pn: array_pn,
                    SessionId: SessionId
                },
                cache: false,
                success: function (dataResult) {

                    console.log(dataResult)
        
                }

            });

        }
        
    }

</script>


<?php

    include 'rodape.php';


?>