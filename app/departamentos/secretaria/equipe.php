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
    <link rel="stylesheet" href="./style_painel.css">
    <title>Secretaria Encontro</title>

   <style> 
  
    /* substitua 200px pela altura do quadro com duas linhas, "MELHOR" */
    .min-height-200 { 
        min-height: 200px; 
        margin: 10px 10px 10px 10px;
        border-radius: 8px; 
        background-color: lightgrey;
          width: 200px;
          height: 200px; } 

          #tabsCem {
              width: 95%;
              margin-left: auto;
              margin-right: auto;
              margin-top: 5px;
              
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
    <div class="container-fluid">
          <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center"> Cadastro Equipe - <?php echo encontro();?>  </h4>
                </div>
          </div>
         <!-- <div class="row" style="margin-top: 10px; ">-->
          <div class="container-box">
                <div class="box a border rounded " style="text-transform: uppercase; margin: 0px 5px 0px 10px;">
                   
                    <ul class="nav nav-tabs" id="tabsCem" role="tablist">
                       
                    </ul>
                    
                   
                    <div class="tab-content" id="myTabContent" style="margin-left: 10px;">
                        
                    </div>
                </div>

            <div id="equipe_cadastrada" class="box b border rounded" ondrop="solta(event)" ondragover="soltasolta(event)" style="text-transform: uppercase; 
                margin: 0px 10px 0px 5px;">
               <p id="quant_eq" > </p>
                    
                   
                
              </div>           
          </div>
      </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>            
<script src="./equipe.js"></script>
<script>
    carregar_membros();
    carregar_equipe();
    quant_equipe();

     

</script>
</body> 
</html> 