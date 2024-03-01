<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantum</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="img/Quantum.png">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--CHAMADNO CSS BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--CHAMANDO FONTAWASOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <?php 
        include 'css/style.php';

        //CORRIGE PROBLEMAS DE HEADER (LIMPAR O BUFFER)
        ob_start();
    ?>

</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="modal_altera_senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content" style="max-width: 300px; margin: 0 auto;">
                <div class="modal-header">
                    <div style="width: 100%; text-align:center; ">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="width: 100%;">
                            <span style="font-weight: bold; color:#999494; font-size: 25px;">Alterar Senha</span>
                        </h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="corpo_modal_mudar_senha"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" onclick="AjaxUpdatePassWord()" style="background-color: #5c0ae9 !important; border-color: #5c0ae9 !important;">Salvar</button>
                </div>
            </div>
        </div>
        </div>

        <div style="background-color: #f5f1f1ab; min-height: 100vh; height: 100vh;">
            
            <div class="alertMsg" id="Msg"></div>

            <div class="container" style="position: relative; top: 30%; transform: translateY(-30%); 
                min-height: 1vh !important;">

                    <div class="div_br"></div>

                    <div class="row justify-content-center">

                    
                        <div class="col-10 col-sm-10 col-md-5 col-lg-5 col-xl-5" style="text-align: left; border-bottom-right-radius: 5px; border-radius: 15px;">
                            
                            <div class="div_br"></div>
                        
                            <div class="form-group">

                                <div style="width: 100%; text-align: center;">

                                    <img style="max-width:200px; max-height:150px; width: auto; height: auto;" src="img/Quantum.png" />

                                </div>

                                <div class="div_br"></div>
                                <div class="div_br"></div>
                                <div class="centralizar">
                                    <span style="font-weight: bold; color:#999494; font-size: 25px;">Quantum</span>
                                </div>
                                <div class="div_br"> </div>
                                <div class="div_br"> </div>
                                <div class="div_br"> </div>

                                <div class="centralizar">
                                    <h13><i class="fa-regular fa-user efeito-zoom" aria-hidden="true"></i> <span style="font-weight: bold; color:#999494;">Acesso</span></h13>
                                </div>

                                <div class="div_br"> </div>

                                <label for="login"><h12><span style="font-weight: bold; color:#999494;">Login:</span></h12></label>
                                <input type="text" class="form-control" id="login" name="login" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="senha"><h12><span style="font-weight: bold; color:#999494;">Senha:</span></h12></label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>

                            <div class="row justify-content-center">
                                <button type="submit" onclick="ajax_valida_login()" id="acessarButton" class="botao_home" style="padding-top: 14px; padding-bottom: 14px;"> <i class="fa fa-key" aria-hidden="true"></i> Acessar</button>
                            </div>

                            <div class="div_br"> </div>

                            <div class="centralizar">
                                    <span style="font-weight: bold; color:#999494; font-size: 15px;">Version 1.0</span>
                            </div>

                            <div id="mensagem_acoes"></div>


                        </div>

                        

                    </div>


            </div>

        </div>

        <!--JQUERY-->    
        <script src="js/jquery-3.5.1.min.js"></script>

         <!--BOOTSTRAP JAVASCRIPT-->  
        <script src="bootstrap/js/bootstrap.min.js"></script> 

        <!--JAVASCRIPTS-->
        <script src="js/scripts.js"></script>  


    <script>


        var meuBotao = document.getElementById('acessarButton');

        // Adiciona um ouvinte de eventos para a tecla "Enter"
        document.addEventListener('keydown', function(event) {
        // Verifica se a tecla pressionada é "Enter" (código 13)
        if (event.key === 'Enter') {
            // Aciona o clique no botão
            meuBotao.click();
        }
        });

        
        function ajax_valida_login() {

            var var_login = document.getElementById('login').value;
            var var_senha = document.getElementById('senha').value;

            upperCaselogin = var_login.toUpperCase();
            upperCasesenha = var_senha.toUpperCase();

            $.ajax({
                url: "funcoes/index/Login.php",
                type: "POST",
                data: {
                    var_login: upperCaselogin,
                    var_senha: upperCasesenha
                },
                cache: false,
                success: function(dataResult) {

                    if (dataResult == 0 ) {

                        alertMsg(0);
            
                    }else if(dataResult == 1){

                        console.log(dataResult);

                        alertMsg(1);

                        setTimeout(function(){location.href="home.php"} , 2000);  
                        
                    }else{

                        console.log(dataResult);

                        alertMsg(2);

                    }
                }
            });
        }

        function alertMsg(parameter){

            if(parameter == 1){

                document.getElementById('Msg').style.right = "0";
                document.getElementById('Msg').innerHTML = '<i class="fa-solid fa-check"></i>   Login Realizado com Sucesso, Aguarde!';

                setTimeout(function() {
                    document.getElementById('Msg').style.right = "-450px";
                }, 1500); // 60000 milissegundos = 1 minuto
                
                

            }else if(parameter == 0){

                document.getElementById('Msg').style.right = "0";
                document.getElementById('Msg').innerHTML = '<i class="fa-solid fa-xmark"></i>   Login ou Senha Incorretos!';
                document.getElementById('Msg').style.backgroundColor = "#FFBABA";
                document.getElementById('Msg').style.color = "#D8000C";

                setTimeout(function() {
                    document.getElementById('Msg').style.right = "-450px";

                    setTimeout(function() {

                       document.getElementById('Msg').style.backgroundColor = "#DFF2BF";
                       document.getElementById('Msg').style.color = "#270";
            
                    }, 1000); 
                        

                }, 1500); 

            }else{

                document.getElementById('Msg').style.right = "0";
                document.getElementById('Msg').innerHTML = '<i class="fa-solid fa-circle-exclamation"></i>   Necessario realizar a troca de senha!';
                document.getElementById('Msg').style.backgroundColor = "#feefb3";
                document.getElementById('Msg').style.color = "#b58129";

                setTimeout(function() {

                    document.getElementById('Msg').style.right = "-450px";

                    setTimeout(function() {

                       document.getElementById('Msg').style.backgroundColor = "#FFBABA";
                       document.getElementById('Msg').style.color = "#270";

            
                    }, 1000); 
                        
                    $('#modal_altera_senha').modal('show')
                    
                    $('#corpo_modal_mudar_senha').load('funcoes/index/ResetPassWord.php');
                    

                }, 1500); 


            }
            

        };

        function AjaxUpdatePassWord(){

            var Login = document.getElementById('login').value;
            var oldPassWord = document.getElementById('OPW').value;
            var NewPassWord = document.getElementById('NPW').value;
            var ConfirmNewPW = document.getElementById('confirm').value;

            if(NewPassWord == ConfirmNewPW){


                $.ajax({
                    url: "funcoes/index/AjaxUpdatePassWord.php",
                    type: "POST",
                    data: {
                        Login: Login,
                        NewPassWord: NewPassWord,
                        oldPassWord: oldPassWord
                    },
                    cache: false,
                    success: function(dataResult) {

                        if(dataResult == 1){


                            $('#modal_altera_senha').modal('hide');

                            document.getElementById('Msg').style.right = "0";
                            document.getElementById('Msg').innerHTML = '<i class="fa-solid fa-check"></i>   Senha alterada com Sucesso!';
                            document.getElementById('Msg').style.backgroundColor = "#DFF2BF";

                            setTimeout(function() {
                                document.getElementById('Msg').style.right = "-450px";
                            }, 1500); // 60000 milissegundos = 1 minuto

                            document.getElementById('senha').value = '';
                            document.getElementById('senha').value = NewPassWord;
                            

                        }else{

                            console.log('error: '+dataResult);
                            document.getElementById('Msg').style.right = "0";
                            document.getElementById('Msg').innerHTML = '<i class="fa-solid fa-xmark"></i>   Erro, Contate o Administrador!';
                            document.getElementById('Msg').style.backgroundColor = "#FFBABA";
                            document.getElementById('Msg').style.color = "#D8000C";

                            setTimeout(function() {

                                document.getElementById('Msg').style.right = "-450px";

                                setTimeout(function() {

                                document.getElementById('Msg').style.backgroundColor = "#DFF2BF";
                                document.getElementById('Msg').style.color = "#270";
                        
                                }, 1000); 
                                    

                            }, 1500); 
                            

                        }
                    }
                });
            
            }


        }
        

    </script>
    
    

</body>
</html>