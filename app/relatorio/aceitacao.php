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
        width: 640px;
        height: auto;
      }
    </style>
    </head>
    <body>
        <div class="container">        
            <canvas id="primeiroGrafico"></canvas>
    </div>
    
    
        <div id="chart-container">
            <canvas id="mycanvas"></canvas>
        </div>
            
    
    
    <script>
         let primeiroGrafico = document.getElementById('primeiroGrafico').getContext('2d');
    
         let chart = new Chart(primeiroGrafico, {
            type: 'bar',
            data: {
                labels: ['mar', 'abril', 'maio', 'Junho', 'julho', 'Setembro'],
                datasets: [{
                label: 'Reconciliação',
                data: [173448346, 175885229, 178276128, 180619108, 182911487, 185150806],
                backgroundColor: "rgba(0, 34,255, 0.3)",
                borderColor: "#0000ff"
            },
            {
                label: 'Aceitação de Jesus',
                data: [173448346, 185150806, 175885229, 182911487, 178276128, 180619108],
                backgroundColor: "rgba(0, 255, 0, 0.3)",
                borderColor: "#002200"
            }
               ]
            }
         });

    </script>
    
   
    </body>
    </html>