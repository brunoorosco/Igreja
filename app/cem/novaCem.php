<?php
  
  include_once("../../_fonts/config/funcoes.php");
  include_once('../../_fonts/config/banco.php');
  include_once("../../menu.php");
  
  validarUsuario();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Secretaria Encontro</title>

   <style> 
  .row > div p {
    background: #FFF;
    padding: 10px 10px 10px 10px;
    margin: 10px 10px 10px 10px ;
    }

    /* substitua 200px pela altura do quadro com duas linhas, "MELHOR" */
    .min-height-200 { 
        min-height: 200px; 
        margin: 10px 10px 10px 10px;
        border-radius: 8px; 
        background-color: lightgrey;
          width: 200px;
          height: 200px; } 

        .my-div {
                margin: 40px 40px 40px 40px;
                min-height: 140px;
                border-radius: 2px;
                background-color: #FFF; 
                font-family: 'Oswald', sans-serif;
                font-size: 30px; 
                font-weight: normal;
                text-align: center;
                           
          }
          .my-div p{
            position: relative;top: 50%;transform: translateY(-50%); 
            background-color: transparent !important;
            padding: 0px 0px 0px 0px !important;
            margin: 0px 0px 0px 0px !important;
          }

          .my-div:hover{
            cursor: pointer;
            transform: scale(1.1);
            background-color: rgba(240,40,50,0.05);

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

<body style="background:#F7F7F7">
    <div class="container">
          <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center"> Encontro com Deus</h4>
                </div>
          </div>
          <div class="container" >
           <div class="row mt-10">
                  <div class="col my-div" data-toggle="tooltip"  style=" background-image: url('../../../_fonts/img/equipe.png');background-size: cover"><a href="./equipe.php" class="fill-div" ></a><p>Membros</p></div>
                  <div class="col my-div" data-toggle="tooltip"  style=" background-image: url('../../../_fonts/img/tarefa.png');background-size: cover"><a href="./tarefas_equipe.php" class="fill-div"></a><p>Encontrista nº</p></div>
                  <div class="col my-div" data-toggle="tooltip"  style=" background-image: url('../../../_fonts/img/encontro_com_Deus.png');background-size: cover"><a href="../../encontro/cad_Encontrista.php" class="fill-div"></a><p>Encontrista nº</p></div>
                  <div class="col my-div" data-toggle="tooltip" ><p>Reencontrista</p></div>
                
             </div>
           <div class="row" style="margin-top: 10px; ">
                  <div class="col my-div"><p>Batizandos</p></div>
                  <div class="col my-div"><p>Discipulado</p></div>
                  <div class="col my-div"><p>Escola de Profeta</p></div>
                  <div class="col my-div"></div>
             </div>
             </div>
             </div>

<script>
              $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})        
</script>
</body> 
</html> 