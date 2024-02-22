<?php

    session_start();	
    //PHP GERAL

    //CORRIGE PROBLEMAS DE HEADER (LIMPAR O BUFFER)
    ob_start();

    $sessionid = $_SESSION['usuario'];
    $sessionidCode = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/icon.png">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Portal Ruston</title>
    <!--CSS-->
    <?php 
        include 'css/style.php';
        include 'css/style_mobile.php';
    ?>

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!--CSS DATA-TABLE-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.5.4/css/colReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    
    

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/302b2cb8e2.js" crossorigin="anonymous"></script>

    <!--GRAFICOS CHART JS 
    <script src="js/Chart.js-2.9.4/dist/Chart.js"></script>--> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"> </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>




    
    
</head>
    <body>

        <header> 
            
            <div style="background-color: #5c0ae9; width: 100%; height: 35px;">
             
                <div style="color: white; padding-left: 3%; width: 5%; height: 35px; display: flex; align-items: center; justify-content: center; font-size: 25px;">

                    <i style="cursor: pointer;" class="fa-solid fa-bars open_menu" id="btn_nav" onclick="exibenav()"></i>

                </div>
                
                <div class="side_bar" id="side_bar">
            
                    <div class="div_br"></div>
                    <div class="div_br"></div>
                    
                    <div onclick="closenav()" style="cursor: pointer; width: 100%; display: flex; align-items: center; justify-content: center; font-size: 25px;">
                        <i class="fa-regular fa-circle-xmark"></i>
                    </div>

                    <div class="div_br"></div>
                    <div class="div_br"></div>

                    <div style="cursor: pointer; width: 100%; height: 150px; display: flex; align-items: center; justify-content: center; font-size: 25px;">
                     
                        <div style="font-size: 100px;">
                            <i class="fa-regular fa-circle-user"></i>
                        </div>
                            
                    </div>

                    <div style="text-align: center;" id="nm_user_logado"><?php echo $sessionid; ?></div>
                    
                    <div class="div_br"></div>
                    <div class="div_br"></div>


                    <div class="side_efect" style="cursor: pointer; width: 100%; padding-top: 10%; padding-bottom: 5%; border-top: solid 1px white; display: flex;">

                        <div style="padding-left: 5%; width: 25%; margin-right: 10px;">

                            <i class="fa-solid fa-paste"style="font-size: 25px;" ></i>

                        </div>

                        <div style="width: 75%;">
                               Relatórios
                        </div>

                    </div>

                    <div class="side_efect" style="cursor: pointer; width: 100%; padding-top: 10%; padding-bottom: 5%; border-top: solid 1px white; display: flex;">

                        <div style="padding-left: 5%; width: 25%; margin-right: 10px;">

                            <i class="fa-solid fa-chart-line" style="font-size: 25px;"></i>
                        </div>

                        <div style="width: 75%;">
                            DashBoards
                        </div>

                    </div>


                    
                    <div onclick="ExitTheSystem()" style="position: absolute; bottom: 0; cursor: pointer; width: 100%; padding-top: 10%; padding-bottom: 5%; display: flex;">

                        <div  style="padding-left: 5%; width: 25%; margin-right: 10px;">
                            <i class="fa-solid fa-door-open" style="font-size: 25px;"></i>
                        </div>

                        <div style="width: 75%;">
                        Sair
                        </div>

                    </div>



            
                </div>
                
                
            </div>

        </header>



        <main>

            <div class="conteudo">
                <div class="container">

                

            
            


