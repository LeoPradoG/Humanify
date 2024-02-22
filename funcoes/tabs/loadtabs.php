<?php


session_start();

$Acess = $_SESSION['acessos'];

?>

<div style="width: 100%; background-color: #f8f6f6; min-height: 100%; padding: 2% 5% 5% 10%;">

        
        <?php

        if(in_array(3,$Acess)){

        ?>

        <div class="row">

            <label style="font-size: 17px; color: #a9a9a9; font-weight: bold;">Administrador</label>
            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">
    
                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Acessos</div>
                <div onclick="redirect_user(1)"style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #5c0ae9; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                    <i class="fa-solid fa-users"></i>

                    </div>
                </div>
    
            </div>

        </div>

        <?php
                
            }

        ?>
            

        <div class="div_br"></div>
        <div class="div_br"></div>

        <!--

        <div class="row">
                
            <label style="font-size: 17px; color: #a9a9a9; font-weight: bold;">CRM</label>
            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">

                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Agenda</div>
                <div onclick="redirect_user(2)" style="width: 100%; height: 80%; position: relative;">
                    <div style=" color: #46606E;width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                </div>

            </div>

            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; margin-left: border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">

                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Atividades</div>
                <div onclick="redirect_user(3)"style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                </div>

            </div>


            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">

                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Cotação de Vendas</div>
                <div style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-solid fa-comments-dollar"></i>
                    </div>
                </div>

            </div>

            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">

                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Pedido de Vendas</div>
                <div style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                </div>

            </div>

            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">
    
                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Pedido de Devolução</div>
                <div style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-solid fa-dolly"></i>
                    </div>
                </div>

            </div>


            
            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">

                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Parceiro de Negocio</div>
                <div onclick="openmodal(7)" style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-solid fa-users"></i>
                    </div>
                </div>

            </div>

        </div>

        <div class="div_br"></div>
        <div class="div_br"></div>

        
        <div class="row">
            
            <label style="font-size: 17px; color: #a9a9a9; font-weight: bold;">Estoque</label>
            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">
    
                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Produtos</div>
                <div style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                </div>
    
            </div>
    
        </div>

        <div class="div_br"></div>
        <div class="div_br"></div>

        <div class="row">
            
            <label style="font-size: 17px; color: #a9a9a9; font-weight: bold;">Vendas</label>
            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">
    
                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Rota de Vendas</div>
                <div style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                </div>
    
            </div>

            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">
                
                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Minha Rota de Vendas</div>
                <div style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-solid fa-route"></i>
                    </div>
                </div>

            </div>
    
        </div>

        <div class="div_br"></div>
        <div class="div_br"></div>

        <div class="row">
            
            <label style="font-size: 17px; color: #a9a9a9; font-weight: bold;">Parceiro de Negocios</label>
            <div onclick="openmodal(11)" class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">
    
                <div  style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Pesquisa CNPJ</div>
                <div style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
    
            </div>

            <div class="efeito-zoom mr-3 mt-3" style="border-radius: 10px; cursor: pointer; width: 160px; height: 140px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">
                
                <div style="width: 100%; height: 20%; text-align: center; padding-top: 5%;">Pré Cadastro</div>
                <div style="width: 100%; height: 80%; position: relative;">
                    <div style="color: #46606E; width: 100%; position: absolute; bottom: 0; padding-left: 10%; padding-bottom: 3%; font-size: 45px;">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>
                </div>

            </div>
    
        </div>
-->

        
</div>