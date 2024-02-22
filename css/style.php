<?php
	//ESTILO CSS	
	//echo '</br></br> ESTILO CSS OK';
?>

<style>

/********/
/*GERAIS*/
/********/

body{
    font-family: 'sans-serif', 'arial'; 
	margin:0;
}

.div_br{
    padding-top: 14px;
}

.row{
    margin: 0;
}

.container{

    padding-top: 20px;
    padding-left: 0px !important;
    padding-right: 0px !important;
    padding-bottom: 20px;
    min-height: 91vh;
    /*max-width: 90% !important;*/
}

p,li{
    color: #444444;
    font-size: 14px;
}

.conteudo{
    background-color: #f9f9f9;
    

}

.centralizar{
	text-align: center;
}

/*******/
/*LOGIN*/
/*******/

.conteudo_login{

    background-image: linear-gradient(#006aac, #03a1c0);

}


.col, .col-1, .col-2, .col-3, .col-4,.col-5, .col-6, 
.col-7, .col-8,.col-9, .col-10, .col-11, .col-12 {
    
    padding: 20px;
    text-align: center;
    background-color: rgba(255,255,255,.99) !important;
}


.col-md-1, .col-md-2, .col-md-3, .col-md-4,.col-md-5, .col-md-6, 
.col-md-7, .col-md-8,.col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    text-align: left;
}


.col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4,.col-lg-5, .col-lg-6, 
.col-lg-7, .col-lg-8,.col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    
    padding: 20px;
    text-align: center;
    background-color: rgba(255,255,255,.99) !important;
}



.img_redimensionada {
		width: 80%;
		height: 80%;
		object-fit: contain;
}
			
/********************/
/*BARRA DE NAVEGACAO*/
/********************/

.bg-color{
    background-color: #ee2235;

}

.navbar{
    padding: 0 !important;
}

.nav-link{
    color: #ffffff;
    font-size:15px;
}

.navbar-dark .navbar-nav .nav-link {
    padding: 16px !important;
    color: rgba(255,255,255.99) !important;
    
}

.navbar-dark:hover .navbar-nav:hover .nav-link:hover {
    color: rgba(255,255,255,.6) !important;
}

.navbar-brand {
    font-family: 'sans-serif', 'arial'; 
    padding-left: 14px;
    font-size:16x !important;

}

.navbar-brand :hover{
    font-family: 'sans-serif', 'arial'; 
    color: rgba(255,255,255,.6) !important;
}

.dropdown-item {
    color: #3d3d3d !important;  
}

/*MENU AZUL CLARO*/
.menu_azul_claro{

    background-color: #ee2235;
    /*border-left: 1px solid #ffffff;
    border-right: 1px solid #ffffff;*/
}

/*MENU PRETO*/
.menu_preto{
 
    background-color: #55594d;
     /*border-left: 1px solid #ffffff;
    border-right: 1px solid #ffffff;*/
    

}

/*MENU PERFIL*/
.menu_perfil{

    background-color: #ee2235;
}


/*AJUSTE BORDA MOBILE*/
@media (max-width: 768px) {
	.menu_azul_claro, .menu_preto, .menu_perfil { 
       border: 0; 
    }
}



.dropdown-menu-right {
    margin-bottom: 20px !important;
}


/*DIRETORIO*/
.diretorio{
    font-size: 13.5px;
    color: #33372b;
    height: 24px;
    background-color: #fffff7;
    border-top: 1px solid #ccd0c4;
    border-bottom: 1px solid #ccd0c4;
    padding-left: 16px;
}

.diretorio_link{
    font-size: 13.5px;
    color: #33372b;
    text-decoration: none;
}

.diretorio_link:hover{
    font-size: 13.5px;
    color: #33372b;
    text-decoration: none;
    opacity: 70%;
}

/********/
/*BOTOES*/
/********/

/*BOTAO HOME */

.botao_home { 
    
    cursor: pointer;
	width: 240px;
	
	padding-top: 20px;
	padding-bottom: 20px; 
    
    margin-top: 6px;
	margin-bottom: 6px; 
	
	border-style: solid;
	border-width: thin;
	border-radius: 5px;  
	border-color: #ee2235;
	
    text-align: center;
    text-decoration: none;
    display: inline-block;	
	
    color: rgba(255,255,255,.99);
    background-color: #ee2235;
	font-size: 14px;
	font-weight: bold;
	
	/*box-shadow: 1px 1px 1px 0px rgba(0,0,0,0.2);*/
	
}

.botao_home:hover {

    text-align: center;
    text-decoration: none;
    display: inline-block;	
	
    color: rgba(255,255,255,.99);
    background-color: #ee2235;
	font-size: 14px;
	font-weight: bold;
    background-color: #ee2235; 
    border-color: #cb646d;

    animation: efeitozoomhome 1600ms infinite; 
}

/*BOTAO HOME ADM */

.botao_home_adm { 
	width: 240px;
	
    padding-top: 20px;
	padding-bottom: 20px;  
	
    margin-top: 6px;
	margin-bottom: 6px; 

	border-style: solid;
	border-width: thin;
	border-radius: 5px;  
	border-color: #e05757;
	
    text-align: center;
    text-decoration: none;
    display: inline-block;	
	
    color: rgba(255,255,255,.99);
    background-color: #e05757;	
	font-size: 14px;
	font-weight: bold;
	
	/*box-shadow: 1px 1px 1px 0px rgba(0,0,0,0.2);*/	
}

.botao_home_adm:hover {

    text-align: center;
    text-decoration: none;
    display: inline-block;	

    color: rgba(255,255,255,.99);
	font-size: 14px;
	font-weight: bold;
    background-color: #e36767; 
    border-color: #e36767;

    animation: efeitozoomhome 1600ms infinite; 
}

/*BOTAO FORM*/


.btn-primary { 

    font-size: 0.875rem !important;
    background-color: #3185c1 !important;
    border-color: #3185c1 !important;	

}



.btn-secondary { 
    font-size: 0.875rem !important;
}


.btn-adm { 
    font-size: 0.875rem !important;
    color: #ffffff !important;
    background-color: #e05757 !important;
    border-color: #e05757 !important;		
}

.btn-adm:hover{ 
    color: #ffffff !important;
    background-color: #e36767 !important; 
    border-color: #e36767 !important;		
}

/* ARQUIVO UPLOAD */
.arquivo_upload {

	font-size: 11px;
	color: #555555;
	
}

/*BOTAO HOME */

.botao_info { 

    text-align: center;
    text-decoration: none;
    display: inline-block;		
    color: #ffa700;
	font-size: 14px;

}

.botao_info:hover {

    text-align: center;
    text-decoration: none;
    display: inline-block;		
    color: #ffc148; 
	font-size: 14px;

}

.botao_verde{
    background-color: #30c669 !important;
    border-color: #30c669 !important;
}

.botao_verde:hover{
    background-color: #3bd274 !important;
    border-color: #3bd274 !important;
}

.botao_info_amarelo { 
    color: #ffffff !important;
    font-size: 0.875rem !important;
    background-color: #ffa700 !important;
    border-color: #ffa700 !important;		
}

.botao_info_amarelo:hover{ 
    color: #ffffff !important;
    background-color: #ffc148 !important; 
    border-color: #ffc148 !important;		
}

/*************/
/*FORMULARIOS*/
/*************/

.bloco_permissoes_setor{
    
    width: 50%;
    max-height: 260px;

    overflow: auto;
    overflow-x: hidden;
    padding: 0;
}

.table thead th {
    font-size: 12px;
    color: #ffffff;
    background-color: #3185c1;
    vertical-align: bottom;
    border: none;
    border-bottom: 1px solid #dee2e6 !important;
    padding-left: 2px !important;
    padding-right: 2px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}
.table td, .table th {
    font-size: 12px;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    padding-left: 2px !important;
    padding-right: 2px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}

tbody{
    vertical-align: top !important;
}

/********/
/*TABELA*/
/********/

th.rotated-text {
    font-size: 0.75rem !important;
    height: 120px;
    white-space: nowrap;
    padding: 0 !important;
}

th.rotated-text > div {
    transform:
        translate(0px, 0px)
        rotate(270deg);
    width: 30px;
}

th.rotated-text > div > span {
    padding: 10px 10px;
}

.fonte_tabela_pequeno{
    font-size: 0.75rem !important;
    text-align: center;
    border-bottom: solid 1px #999999;
}

.fundo_amarelo{
    color: #000000 !important;
    background-color: #ffeeb8 !important;
}

.fundo_azul{
    color: #000000 !important;
    background-color: #c9e2ff !important;
}

.fundo_azul_escuro{
    color: #000000 !important;
    background-color: #8bc0fe !important;
}
  
.fundo_preto{
    color: #ffffff !important;
    background-color: #444444 !important;
}

.fundo_vermelho{
    color: #ffffff !important;
    background-color: #ff6262 !important;
}

.fundo_verde{
    color: #ffffff !important;
    background-color: #34c777 !important;
}

/*******/
/*FONTS*/
/*******/

/*LINK MENU*/
h10{
    font-family: 'sans-serif', 'arial'; 
    color: rgba(255,255,255.99);
    font-size:17px;
}

/*TITULO*/
h11{
    font-family: 'sans-serif', 'arial'; 
    font-size:22px;
    color: #3d3d3d;
    border-bottom: 1px solid #dadada;
    padding-bottom: 3px;
}

/*FONTE PADRAO*/
h12{
    font-family: 'sans-serif', 'arial'; 
    font-size:15px;
    color: #3d3d3d;
}

/*INFO LOGIN*/
h13{
    font-family: 'sans-serif', 'arial'; 
    font-size:16px;
    color: #3d3d3d;
    border-bottom: 1px solid #dadada;
    padding-bottom: 3px;
}

/*TITULO LOGIN*/
h14{
    font-family: 'sans-serif', 'arial'; 
    font-size:17px;
    color: #3d3d3d;
}

/*INFORMACOES HOME*/
.link_home_pend{
    font-family: 'sans-serif', 'arial'; 
    font-size:13px;
    color: #3d3d3d;
    text-decoration: none;
}

.link_home_pend:hover{
    color: #3185c1;
    text-decoration: none;
}


/*********/
/*ESPACOS*/
/*********/

.espaco{
	display: inline-block;
	width: 14px;	
}


.espaco_pequeno{
	display: inline-block;
	width: 4px;	
}

.espaco_workflow{
	display: inline-block;
	width: 20px;	
}




/********/
/*RODAPE*/
/********/

.footer-bs {
    background-color: #3c3d41;
	padding: 40px 110px;
	color: rgba(255,255,255,1.00);
	margin-bottom: 0px;
	border-bottom-right-radius: 0px;
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
}
.footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { 
    padding:10px 25px; 
}

.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { 
    border-left:solid 1px rgba(255,255,255,0.10);  
}
.footer-bs .footer-brand h2 { 
    margin:0px 0px 10px; 
}

.footer-bs .footer-brand p { 
    font-size:12px; color:rgba(255,255,255,0.70); 
}

.footer-bs .footer-nav ul.pages { 
    list-style:none; padding:0px; 
}

.footer-bs .footer-nav ul.pages li { 
    padding:5px 0px;
}

.footer-bs .footer-nav ul.pages a { 
    color:rgba(255,255,255,1.00); font-weight:bold; text-transform:uppercase; 
}

.footer-bs .footer-nav ul.pages a:hover { 
    color:rgba(255,255,255,0.80); text-decoration:none; 
}

.footer-bs .footer-nav h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
	margin-bottom:10px;
}

.footer-bs .footer-nav ul.list { 
    list-style:none; padding:0px; 
}

.footer-bs .footer-nav ul.list li { 
    padding:5px 0px;
}

.footer-bs .footer-nav ul.list a { 
    color:rgba(255,255,255,0.80); 
}

.footer-bs .footer-nav ul.list a:hover { 
    color:rgba(255,255,255,0.60); text-decoration:none;
}

.footer-bs .footer-social ul { 
    list-style:none; padding:0px; 
}

.footer-bs .footer-social h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
}

.footer-bs .footer-social li { 
    padding:5px 4px;
}

.footer-bs .footer-social a { 
    color:rgba(255,255,255,1.00);
}

.footer-bs .footer-social a:hover { 
    color:rgba(255,255,255,0.80); text-decoration:none; 
}

.footer-bs .footer-ns h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
	margin-bottom:10px;
}
.footer-bs .footer-ns p { 
    font-size:12px; color:rgba(255,255,255,0.70);
}


/*SUBIR AO TOPO*/

#subirTopo {
    text-decoration: none;
    bottom: 20px;
    right: 20px;
    color: #3185c1;
    text-align: center;
    cursor: pointer;
    font-size: 34px;
    font-weight: bold;
    text-transform: uppercase;
    position: fixed;
    border: 0;
    opacity: .4;
    }
    
    #subirTopo:hover {
    opacity:1;
    }

/*********/
/*ALERTAS*/
/*********/

.alert{
    font-size: 14px;
}


/**********/
/*POPOVERS*/
/**********/

.popover{
    border: 1px solid rgba(0,0,0,.125) !important;
}

.popover-header{
    background-color: #f9f9f9 !important;
}

/***********/
/*DASHBOARD*/
/***********/

.dash_azul_escuro{
    
    font-size: 1.063rem !important;
    color: #ffffff;
    font-weight: bold;
    text-align: center;

    padding: 0.625rem !important;
    
    background-color: #366092 !important;
}

.dash_separador_claro{

  margin-top: 0.2 !important;
  margin-bottom: 0.2 !important;

  background-color: #f9f9f9 !important; 

}

.dash_azul_claro{
    
    font-size: 0.8rem !important;
    color: #ffffff;
    font-weight: bold;
    text-align: center;

    padding: 0.625rem !important;
    
    border-left: 0.625rem solid #f9f9f9 !important;
    border-right: 0.625rem solid #f9f9f9 !important;  
    
    background-color: #538dd5 !important;
}

.dash_resultado_claro{
    
    font-size: 0.875rem !important;
    color: black;
    /*font-weight: bold;*/
    text-align: center;

    padding: 0.625rem !important;

    border-left: 0.625rem solid #f9f9f9 !important;
    border-right: 0.625rem solid #f9f9f9 !important;
    
    background-color: #ffffff !important;
}

/*ENCONTRAR OUTRA FORMA DE TRAVAR PRIMEIRA COLUNA*/

/*TRAVA PRIMEIRA COLUNA DAS TABELAS*/
th:first-child, td:first-child
{
  position:sticky;
  left:0px;

}


/*TAMANHO MODAL*/
.modal-dialog {

   min-width: 70%;
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: #3185c1 !important; 
  color: #ffffff; 
}

.modal-open {
    overflow: hidden;
}

/*CARIMBO*/
h99{
    
    font-family: Andale Mono, monospace;
    display: inline-block;
    color: black;
    font-size: 12px;
    line-height: 10px;
    text-transform: uppercase;
    text-align: center;
    transform: rotate(-5deg);
    letter-spacing: -1px;
    font-weight: bold;
}

/*TABELA PIVOT*/

.pivot_tr_titulo{

    width:100%;
    text-align: center; 
    color: white; 
    background-color: #3185c1;  
    font-size: 10px; 

}

.pivot_tr_conteudo{

    font-size: 10px;
    border-bottom: solid 1px #dee2e6;
    padding-left: 2px;
    padding-right: 2px;

}

.fnd_azul{

    background-color: #46A5D4 !important;
    color: #fff !important;
    border-radius: 3px !important;
    padding: 8px !important;
    font-size: 20px !important;
    margin-bottom: 10px !important;
}


/*WORKFLOW*/

.qtd_workflow{

    font-family: Arial, Helvetica, sans-serif;
    font-style: normal;
    font-size: 10px;
    background-color: #FF2A19;
    border-radius: 20px;
    padding-left: 4px;
    padding-right: 5px;
    padding-bottom: 3px;
    padding-top: 3px;
}

/*TOPICOS*/

.topicos{

    color: white;
    background-color: #3185c1;
    padding: 6px 12px 6px 12px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    margin-right: 3px;

}

.topicos:hover{ 

    color: white;
    background-color: #31b2d0 !important; 
    padding: 6px 12px 6px 12px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    text-decoration: none;

}

.topicos:focus{ 

    background-color: #31b2d0 !important; 

}

/*ALERT PERSONALZIDO*/

.alert_pers_amarelo{

    font-size: 13px;
    color: #ff5e00 !important;
    padding: 12px 20px 12px 18px;
    background-color: #fff3cd;
    border: solid 1px #ffeeba;
    border-radius: 5px;
    width: 100%;
    margin: 1px 80px 1px 80px;
    text-align: center;
}

/*EFEITOS*/

.btn:hover{

    animation: efeitozoom 1600ms infinite; 
}

.efeito-zoom:hover{ 
	        
    animation: efeitozoom 1600ms infinite; 
    background-color: #a9e5ff6b; 
 
        
}

@keyframes efeitozoom {
  from {transform: scale(0.90);}
  to {transform: scale(1.1);}
}

@keyframes efeitozoomhome {
  from {transform: scale(0.95);}
  to {transform: scale(1);}
}



.textarea {

overflow-y: scroll;
width: 100%;
height: 80px;
padding: 12px 20px;
box-sizing: border-box;
border: 1px solid #ccc;
border-radius: 4px;
background-color: #ffffff;
font-size: 16px;
resize: none;
} 

.assinatura {

width: 100px;
height: 25px;
margin-left: 50px;
object-fit: cover;


}

.check_box {
  width: 1.2rem;
  height: 1.2rem;
  color: dodgerblue;
  vertical-align: middle;
  -webkit-appearance: none;
  background: none;
  border: 0;
  outline: 0;
  flex-grow: 0;
  border-radius: 50%;
  background-color: #FFFFFF;
  transition: background 300ms;
  cursor: pointer;
}

.check_box::before {
  content: "";
  color: transparent;
  display: block;
  width: inherit;
  height: inherit;
  border-radius: inherit;
  border: 0;
  background-color: transparent;
  background-size: contain;
  box-shadow: inset 0 0 0 1px #CCD3D8;
}

.check_box:checked {
  background-color: currentcolor;
}

.check_box:checked::before {
  box-shadow: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath d='M15.88 8.29L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z' fill='%23fff'/%3E %3C/svg%3E");
}

.check_box:disabled {
  background-color: #CCD3D8;
  opacity: 0.84;
  cursor: not-allowed;
}

.check_box::-ms-check {
  content: "";
  color: transparent;
  display: block;
  width: inherit;
  height: inherit;
  border-radius: inherit;
  border: 0;
  background-color: transparent;
  background-size: contain;
  box-shadow: inset 0 0 0 1px #CCD3D8;
}

.check_box:checked::-ms-check {
  box-shadow: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath d='M15.88 8.29L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z' fill='%23fff'/%3E %3C/svg%3E");
}

[data-tooltip] {
  position: relative;
  /*font-weight: bold;*/
}

[data-tooltip]:before {
  display: none;
  position: absolute;
  top: -30px;
  padding: 5px;
  border-radius: 3px;
  right: calc(100% + 2px);
  content: attr(data-tooltip);
  white-space: nowrap;
  background-color: #3185c1;
  border: solid 1px #46a5d4;
  color: White;
  text-align: right;
}

[data-tooltip]:hover:before {
  display: block;
}
.table thead th {
    font-size: 12px;
    color: #ffffff;
    background-color: #3185c1;
    vertical-align: bottom;
    border: none;
    border-bottom: 1px solid #dee2e6 !important;
    padding-left: 2px !important;
    padding-right: 2px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}
.table td, .table th {
    font-size: 12px;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    padding-left: 2px !important;
    padding-right: 2px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}

tbody{
    vertical-align: top !important;
}


.cabecalho_reg_acom {

font-size: 22px;
font-weight: bold;
background-color: #46a5d4; 
min-width: 100%; 
height: 60px;
margin: 0 auto; 
text-align: center;    
color: #ffffff;   

}

.cabecalho_reg_acom_peq{

line-height: 54px;
width: 10%; 
height: 60px; 
float: left;

}

.cabecalho_reg_acom_grand{

line-height: 60px;
width: 80%; 
height: 60px;   
float: left;

}



/*ANIMACOES*/

@keyframes example {
  0%   {color:rgba(70, 165, 212,0.2); font-size: 40px;}
  50%  {color:rgba(70, 165, 212,1); font-size: 41px;}
  100% {color:rgba(70, 165, 212,0.2); font-size: 40px;}
}


/* basic positioning */
.legend { list-style: none; }
.legend li { float: left; margin-right: 10px; }
.legend span { border: 1px solid #ccc; float: left; width: 12px; height: 12px; margin: 2px; }

/* your colors */
.legend .superawesome { background-color: #0085bb; }
.legend .awesome { background-color: #dfc743; }
.legend .kindaawesome { background-color: #51b972; }
.legend .notawesome { background-color: #f05540; }

.loader {
    width: 48px;
    height: 48px;
    border: 5px solid #70aedc;
    border-bottom-color: white;
    border-radius: 50%;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    } 
    
    .table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #46a5d4;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #51769b;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
      

.dataTables_info {
    margin-left: 25px !important; /* Ajuste o valor conforme necessário */
}

.dataTables_length {
    margin-left: 25px; /* Ajuste o valor conforme necessário */
}

.dataTables_filter {
    margin-right: 25px; /* Ajuste o valor conforme necessário */
}

/* Estilização dos botões de exportação */
.buttons-excel{

    background-color: #46a5d4 !important; /* Cor de fundo */
    color: white !important; /* Cor do texto */
    border-radius: 5px !important;
    padding: 5px 10px; /* Espaçamento interno */
    margin: 2px; /* Margem externa */
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

/* Estilos de hover */
.buttons-excel:hover{
    background-color: #2980b9; /* Cor de fundo em hover */
    color: white; /* Cor do texto em hover */
}

 /* Estilo para tornar a tabela responsiva */
 .responsive-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ccc;
    margin: 10px 0;
  }

  .responsive-table th, .responsive-table td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  /* Alterar a aparência da tabela em telas menores */
  @media screen and (max-width: 600px) {
    .responsive-table {
      border: 0;
    }

    .responsive-table thead {
      display: none;
    }

    .responsive-table tr {
      margin-bottom: 10px;
      display: block;
      border: 1px solid #ddd;
    }

    .responsive-table td {
      border-bottom: 0;
    }

    .responsive-table td:before {
      content: attr(data-label);
      float: left;
      font-weight: bold;
    }
  }

  #painel_cadastro {

    width: 40%;
    height: max-content;
    background-color: white;
    border: 1px solid #dddddd;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 5px;
    position: absolute;
    top: 8rem;
    z-index: 1 !important;
    left: -100rem;

    }

    #painel_cadastro.abrir_painel_cadastro {
        animation-name: animacao_painel_abrir;
        animation-duration: .3s;
        animation-fill-mode: forwards;
    }

    @keyframes animacao_painel_abrir {
    0% {
            left: -100rem;
        }

    100% {
            left: 7rem;
        }
    }

    #painel_cadastro.fechar_painel_cadastro {
        animation-name: animacao_painel_fechar;
        animation-duration: .3s;
        animation-fill-mode: forwards;
    }

    @keyframes animacao_painel_fechar {
    0% {
            left: 7rem;
        }

    100% {
            left: -100rem;
        }
    }

    .loader {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        position: relative;
        animation: rotate 1s linear infinite
      }
      .loader::before , .loader::after {
        content: "";
        box-sizing: border-box;
        position: absolute;
        inset: 0px;
        border-radius: 50%;
        border: 5px solid #FFF;
        animation: prixClipFix 2s linear infinite ;
      }
      .loader::after{
        border-color: #444444;
        animation: prixClipFix 2s linear infinite , rotate 0.5s linear infinite reverse;
        inset: 6px;
      }

      @keyframes rotate {
        0%   {transform: rotate(0deg)}
        100%   {transform: rotate(360deg)}
      }

      @keyframes prixClipFix {
          0%   {clip-path:polygon(50% 50%,0 0,0 0,0 0,0 0,0 0)}
          25%  {clip-path:polygon(50% 50%,0 0,100% 0,100% 0,100% 0,100% 0)}
          50%  {clip-path:polygon(50% 50%,0 0,100% 0,100% 100%,100% 100%,100% 100%)}
          75%  {clip-path:polygon(50% 50%,0 0,100% 0,100% 100%,0 100%,0 100%)}
          100% {clip-path:polygon(50% 50%,0 0,100% 0,100% 100%,0 100%,0 0)}
      }

    #excel-button {
        background-color: #46606e !important;
        cursor: pointer; /* Mude o cursor ao passar o mouse sobre o botão */

    }

    
    #excel-button {
        background-color: #46606e !important;
        cursor: pointer; /* Mude o cursor ao passar o mouse sobre o botão */

    }

    #excel-button:hover {

        background-color: #46606e !important; /* Mude a cor de fundo ao passar o mouse sobre o botão */

    }

    .side_bar{

        position: fixed;
        top: 0;
        left: -200px; /* Esconda à esquerda da tela */
        width: 200px;
        height: 100vh;
        background-color: #46606E;
        color: #fff;
        transition: left 0.3s ease; /* Adicione uma transição suave ao movimento */
        z-index: 1; /* Valor alto para garantir que fique na frente */

    }
    
    .side_efect:hover{

            background-color: #a9e5ff6b;

    }

    .fc-col-header-cell-cushion{

        text-decoration: none;
        color: black;

    }

    
    .fc-col-header-cell-cushion:hover{

        text-decoration: none;
        color: #46606E;
        cursor: pointer;

    }

    .fc-daygrid-day-number{

        text-decoration: none;
        color: black;

    }


    .fc-daygrid-day-number:hover{

        text-decoration: none;
        color: black;
        cursor: pointer;

    }
    

</style>