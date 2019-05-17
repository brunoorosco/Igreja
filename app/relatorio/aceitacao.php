<?php

	  include_once "../../_fonts/config/banco.php";
      include_once "../../menu.php";
      require_once "./func_relatorio.php";
      validarUsuario();

	if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Relatório</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
       <!-- <script src="../../_fonts/js/Chart.min.js"></script>-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.5.0"></script>

        <script src="./relatorio.js"></script>
        <style type="text/css">
  
      body {
    background-color: #f6f6f6;
    margin: 0;  
     padding: 0;
}

body.iframe {
    background-color: #fff;
}

.wrapper {
    padding: 15px;
}

.chart_container {
 
    margin-bottom: 15px;
     background: #fff;
    -webkit-box-shadow: 0 0 5px 0 #ddd;
    box-shadow: 0 0 5px 0 #ddd;
    border-radius: 2px;
}

.chart {
    height: 400px;
    padding: 5px 5px 5px 5px;

}

#score-card {
    height: 400px; 
}

.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    padding-left: 10px;
    padding-right: 10px;
}

.row > div p {
    background: #fff;
    padding: 5px 5px 5px 5px;
    margin: 5px 5px 5px 5px ;

    }

    /* substitua 200px pela altura do quadro com duas linhas, "MELHOR" */
    .min-height-200 { 
        min-height: 100px; 
        margin: 5px 5px 5px 5px;
        border-radius: 8px;
       
         } 

        #my-div {
          background-color:#fff;
         
          height: 100px;
          }

          a.fill-div {
          text-align: center;
          display: block;
          height: 100%;
          width: 100%;
          text-decoration: none;
          }
    </style>
    </head>
    <body>
 
<div class="wrapper">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="chart_container">
                <div class="chart" id="score-card"> 
                    <canvas id="Grafico" style="position: relative; height:60vh; width:80vw;"></canvas>
                </div>
            </div>
        </div>
   
        <div class="col-lg-6 col-md-12 col-sm-12" id="score_card" >
        <div class="row chart_container" >
            <div class="col-6">
                <div class="chart" id="score-card"> 
                  <canvas id="GraficoPizza"></canvas>
                </div>
            </div>    
          
            <div class="col-6 ">
                <div class="chart" id="score-card">  
                    <canvas id="GraficoBatizado"></canvas>
                </div>
            </div>
           </div> 
        </div>
    </div>

    <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12" >
            <div class="chart_container">
                <div class="chart" id="score_card">
                    <h3 class="text-center"> CEM's - Quantidade de Membros</h3>
                            <div class="row">
                                <div  id="my-div" class="col border bg-light min-height-200" style="margin-left: 30px;"><a href="#" class="fill-div"></a></div>
                                <div class="col border bg-light min-height-200">Cadastro de Equipe</div>
                                <div class="col border bg-light min-height-200">col</div>
                                <div class="col border bg-light min-height-200" style="margin-right: 30px;">col</div>
                            </div>
                        <div class="row" >
                                <div class="col border bg-light min-height-200" style="margin-left: 30px;">col</div>
                                <div class="col border bg-light min-height-200">col</div>
                                <div class="col border bg-light min-height-200">col</div>
                                <div class="col border bg-light min-height-200" style="margin-right: 30px;">col</div>
                        </div>

                    </div>
                </div>
         </div>
                <div class="col-lg-6 col-md-12 col-sm-12"  style="margin-left: -15px; margin-right:15px;">
                    <div class="chart_container">
                        <div class="chart" id="score_card"></div>
                    </div>
                </div>
          </div>
    </div>
         
     <script>
            window.onload = function() {
            grafico();
            grafico2();
            graficoBatizado();
            
            
    }

    </script> 

 


   
    </body>
    </html>