<?php

    include 'cabecalho.php';

?>

<div class="div_br"> </div>

<h11><i style="cursor: pointer;"class="fa-solid fa-user-plus efeito-zoom"></i> Cadastro</h11>
<div class='espaco_pequeno'></div>
<h27><a href="home.php" style="color: #444444; text-decoration: none;"><i class="fa fa-reply efeito-zoom" aria-hidden="true"></i> Voltar</a></h27>

<div class="div_br"> </div>  
<div class="div_br"> </div>  

<!-- Modal -->
<div class="modal fade" id="update_senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" style="max-width: 500px; margin: 0 auto;">
        <div class="modal-header">
            <div style="width: 100%; text-align:center; "><h5 class="modal-title" id="exampleModalLongTitle">Alterar Senha</h5></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            <div id="update_senha_usuario"></div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" onclick="ajax_update_senha()">Salvar</button>
        </div>
    </div>
</div>
</div>

<div id="mensagem_acoes_projeto"></div>

<div class="row">

    <div class="col-md-3">
        
        Login:
        <input type="text" class="form form-control" id="login">

    </div>

    <div class="col-md-3">
        
        Senha:
        <input type="password" class="form form-control" id="password">

    </div>

    <div class="col-md-3">
        
        Administrador:
        <select class="form form-control" id="sn_adm">

            <option value="All">Selecione</option>
            <option value="S">Sim</option>
            <option value="N">Não</option>

        </select>

    </div>

    <div class="col-md-3">

        Acesso:
        <select class="form form-control" id="tp_acesso">

            <option value="1">Total</option>

        </select>

    </div>


</div>

<div class="div_br"> </div> 

<div class="row">

    <div class="col-md-3">
        
        Nome:
        <input type="text" class="form form-control" id="name">

    </div>

    <div class="col-md-3">
        
        Sexo:
        <select class="form form-control" id="tp_sexo">

            <option value="All">Selecione</option>
            <option value="M">Masculino</option>
            <option value="F">Feminio</option>

        </select>

    </div>

    <div class="col-md-3">

        Nascimento:
        <input type="date" class="form form-control" id="nascimento">

    </div>

    <div class="col-md-1">
        <br>
        <button onclick="ajax_insert_usuarios()" class="btn btn-primary" style="background-color: red !important; border-color: red !important;"><i class="fa-solid fa-plus"></i></button>
    </div>

</div>

<div id="carrega_tabela_usuarios"></div>

<script>

        window.onload = function() {

            ajax_carrega_tabela_usuarios();


        };

        function ajax_carrega_tabela_usuarios(){

            $('#carrega_tabela_usuarios').load('funcoes/parceiro/ajax_carrega_tabela_usuarios.php');


        }

        function ajax_insert_usuarios(){

            var_login = document.getElementById('login').value;
            var_senha = document.getElementById('password').value;
            var_adm   = document.getElementById('sn_adm').value;
            acesso   = document.getElementById('tp_acesso').value;
            var_nome  = document.getElementById('name').value;
            var_sexo  = document.getElementById('tp_sexo').value;
            var_nascimento = document.getElementById('nascimento').value;

            $.ajax({
                
                url: "funcoes/parceiro/cadastro_pn.php",
                type: "POST",
                data: {

                    var_login : var_login,
                    var_senha : var_senha,
                    var_adm : var_adm,
                    acesso: acesso,
                    var_nome : var_nome, 
                    var_sexo : var_sexo,
                    var_nascimento : var_nascimento

                },

                cache: false,
                success: function(dataResult){

                    console.log(dataResult);
                    ajax_carrega_tabela_usuarios()

                    document.getElementById('login').value = '';
                    document.getElementById('password').value = '';
                    document.getElementById('sn_adm').value = '';
                    document.getElementById('tp_acesso').value = '';
                    document.getElementById('name').value = '';
                    document.getElementById('tp_sexo').value = '';
                    document.getElementById('nascimento').value = '';


                }

            });  
            
        }

        function ajax_update_informações_usuario(usuario){

            $('#update_senha').modal('show');
            $('#update_senha_usuario').load('funcoes/parceiro/corpo_update_senha.php?usuario='+usuario);

        }

        function ajax_update_senha(){
            
            cd_usuario = document.getElementById('cd_usuario').value;
            nova_senha = document.getElementById('senha_login_selecionado').value;
        
            $.ajax({
                
                url: "funcoes/parceiro/ajax_update_senha.php",
                type: "POST",
                data: {

                    cd_usuario : cd_usuario,
                    nova_senha : nova_senha

                },

                cache: false,
                success: function(dataResult){

                    console.log(dataResult);
                    ajax_carrega_tabela_usuarios()
                    $('#update_senha').modal('hide');

                    if(dataResult == 1){

                        //MENSAGEM            
                        var_ds_msg = 'Senha%20alterada%20com%20Sucesso!';
                        var_tp_msg = 'alert-success';
                        //var_tp_msg = 'alert-danger';
                        //var_tp_msg = 'alert-primary';
                        $('#mensagem_acoes_projeto').load('funcoes/mensagem/ajax_mensagem_acoes_projeto.php?ds_msg='+var_ds_msg+'&tp_msg='+var_tp_msg);


                    }else if(dataResult == 2){

                        //MENSAGEM            
                        var_ds_msg = 'Erro%20ao%20Atualizar%20a%20Senha%20Contate%20o%20Desenvolvedor!';
                        //var_tp_msg = 'alert-success';
                        var_tp_msg = 'alert-danger';
                        //var_tp_msg = 'alert-primary';
                        $('#mensagem_acoes_projeto').load('funcoes/mensagem/ajax_mensagem_acoes_projeto.php?ds_msg='+var_ds_msg+'&tp_msg='+var_tp_msg);

                    }else{

                        //MENSAGEM            
                        var_ds_msg = 'Erro%20Na%20Consulta%20Contate%20o%20o%20Desenvolvedor!';
                        //var_tp_msg = 'alert-success';
                        var_tp_msg = 'alert-danger';
                        //var_tp_msg = 'alert-primary';
                        $('#mensagem_acoes_projeto').load('funcoes/mensagem/ajax_mensagem_acoes_projeto.php?ds_msg='+var_ds_msg+'&tp_msg='+var_tp_msg);


                    }

                }

            });  


        }

</script>



<?php

    include 'rodape.php';


?>