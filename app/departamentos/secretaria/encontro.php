<?php
  
  include_once("../../../_fonts/config/funcoes.php");
  include_once('../../../_fonts/config/banco.php');
  include_once("../../../menu.php");
  
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
    background: #555555;
    padding: 10px 10px 10px 10px;
    margin: 10px 10px 10px 10px ;
    }

    /* substitua 200px pela altura do quadro com duas linhas, "MELHOR" */
    .min-height-200 { 
        min-height: 200px; 
        margin: 10px 10px 10px 10px;
        border-radius: 8px;  } 

        #my-div {
          background-color: lightgrey;
          width: 200px;
          height: 200px;
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
    <div class="container">
          <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center"> Encontro com Deus</h4>
                </div>
          </div>
          <div class="container bg-secondary ";" style="border-radius: 8px !important; padding-left: 20px;padding-rigth: 20px; " >
           <div class="row" style="margin-top: 10px; ">
                  <div  id="my-div" class="col border bg-light min-height-200" style=" background-image: url('http:/www/igreja/_fonts/img/equipe.png');background-size: cover"><a href="#" class="fill-div"></a></div>
                  <div class="col border bg-light min-height-200">Cadastro de Equipe</div>
                  <div class="col border bg-light min-height-200">col</div>
                  <div class="col border bg-light min-height-200">col</div>
             </div>
           <div class="row" style="margin-top: 10px; ">
                  <div class="col border bg-light min-height-200"></div>
                  <div class="col border bg-light min-height-200">col</div>
                  <div class="col border bg-light min-height-200">col</div>
                  <div class="col border bg-light min-height-200">col</div>
             </div>
             </div>
             </div>
                      
      
</body> 
</html> 