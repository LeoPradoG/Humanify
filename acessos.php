<?php

include 'cabecalho.php';

?>


<div class="div_br"> </div>

<div class='espaco_pequeno'></div>

<h27><a href="home.php" style="color: #444444; text-decoration: none;"><i class="fa fa-reply efeito-zoom" aria-hidden="true"></i> Voltar</a></h27>

<div class="div_br"> </div>  

<div style="background-color: white; width: 100%; height: 45vh; border: solid 1px #a9a9a9; position: relative;">

    <div style="width: 100%; background-color: white; font-size: 25px; text-align: center; font-weight: bold; color:#a9a9a9; border: solid 1px #a9a9a9; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">Cadastro de Usuarios</div>
    
    <div class="div_br"> </div>

    <div  style="width: 100%; height: 200px; padding-left: 2%; padding-right: 2%; margin-bottom: 1%;">

        <div class="row">
            
            <div class="col-md-3">
            <span style="font-weight: bold; color:#a9a9a9;">Login:</span>
            <br>
            <input class="form form-control" type="text" id="nm_usuario" placeholder="Exemplo: usuario.usuario">
            </div>

            <div class="col-md-3">
            <span style="font-weight: bold; color:#a9a9a9;">Senha:</span>
            <br>
            <input class="form form-control" type="text" id="nm_usuario" placeholder="Exemplo: Mudar@123">
            </div>

            <div class="col-md-3">
            <span style="font-weight: bold; color:#a9a9a9;">Data Nascimento:</span>
            <br>
            <input class="form form-control" type="date" id="nm_usuario" placeholder="Exemplo: usuario.usuario">
            </div>

        </div>

        <div class="div_br"> </div>

        <div class="row">

            <div class="col-md-3">
            <span style="font-weight: bold; color:#a9a9a9;">Sexo:</span>
            <br>
            <select class="form form-control">
                <option value="">Selecione</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            </div>

             
            <div class="col-md-3">
            <span style="font-weight: bold; color:#a9a9a9;">Primeiro Acesso:</span>
            <br>
            <select class="form form-control">
                <option value="">Selecione</option>
                <option value="S">Sim</option>
                <option value="N">Não</option>
            </select>
            </div>

            <div class="col-md-3">
            <span style="font-weight: bold; color:#a9a9a9;">Tipo Acesso:</span>
            <br>
            <select class="form form-control">
                <option value="">Selecione</option>
                <option value="C">Colaborador</option>
                <option value="S">Supervisor</option>
                <option value="O">Coordenador</option>
                <option value="A">Administrador</option>
            </select>
            </div>

        </div>

 
    </div>

    <div style="position: absolute; bottom: 0; width: 100%; background-color: white; font-size: 25px; text-align: center; font-weight: bold; color:#a9a9a9; border: solid 1px #a9a9a9; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
    
    <button style="float: right; margin: 5px 5px 5px 5px; background-color: #5c0ae9 !important; border-color: #5c0ae9 !important;"class="btn btn-primary">Adicionar</button>
    </div>



</div>







<?php

include 'rodape.php';

?>