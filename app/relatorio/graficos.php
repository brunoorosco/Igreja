<?php

	include_once("../../_fonts/config/banco.php");
  	include_once "../../menu.php";
	if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cursos TMAC</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <script src="../../_fonts/js/Chart.min.js"></script>
        <script src="./relatorio.js"></script>
        <style type="text/css">
        
        #chart-container {
        width: 800px;
        height: 800px;
      }
    </style>
    </head>
    <body style="background-color:#eeeeee;">      
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm chart-container">
                        <canvas id="curso"></canvas>
                </div>
                
                <div class="col-sm chart-container">
                        <canvas id="aceitou"></canvas>
                </div>
               
                <div class="col-sm chart-container">
                        <canvas id="encontro"></canvas>
                </div>
            </div> 
        </div>  
      
   
    </body>
    </html>