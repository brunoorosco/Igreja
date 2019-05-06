<?php

	  include_once "../../_fonts/config/banco.php";
      include_once "../../menu.php";
      require_once "./func_relatorio.php";
      
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
       <!-- <script src="../../_fonts/js/Chart.min.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src="./relatorio.js"></script>
        <style type="text/css">
      #chart-container {
        width: 640px;
        height: auto;
      }
    </style>
    </head>
    <body>
    <div class="container-fluid">   
          <div class="row">
              <div class="col-8">   
                  <div class="chart-container" style="position: relative; height:35vh; width:60vw" >
                      <canvas id="Grafico"></canvas>
                  </div>
              </div>
              <div class="col-4" style="position: relative; height:35vh; width:60vw">
                      <canvas id="GraficoPizza"> </canvas>
                      <div class="">
                         <div class="form-group col-md-4 right">
                           <label for="inputState">Ano</label>
                            <select id="inputState" class="form-control">
                              <option selected>2019</option>
                              <option>2018</option>
                               </select>
                      </div>
                      </div>
                      <canvas id="myChart" width="400" height="400"></canvas>
                 </div>
            </div>
           
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

window.onload = function() {
            grafico();
    }
    </script>
     </div>
                
   <script src="./relatorio.js" ></script>
    
   
    </body>
    </html>