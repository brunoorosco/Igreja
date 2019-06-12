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
                    <h4 class="card-title text-center"> Equipe</h4>
                </div>
          </div>
           <div class="row" style="margin-top: 10px; ">
            <div class="col border rounded " >
               
                <ul class="nav nav-tabs" id="tabsCem" role="tablist">
                   
                </ul>
                
               
                <div class="tab-content" id="myTabContent" style="text-transform: uppercase;">
                    
                </div>
            </div>

            <div class="col border rounded" ondrop="drop(event)" ondragover="allowDrop(event)" style="text-transform: uppercase;" >Equipe
             </div>
            
            
            </div>
            
             </div>
            
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>            
<script src="./equipe.js"></script>
<script>
    carregar_membros();

    $(document).ready(function () {
        $(".removerItem").click(function(){
  	    $(this).parent().parent().empty();
});

});

  

</script>
</body> 
</html> 