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
    <title>Secretaria Encontro</title>
    <script src="./equipe.js" ></script>
   <style> 

.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    padding-left: 10px;
    padding-right: 10px;
}
  
      /* substitua 200px pela altura do quadro com duas linhas, "MELHOR" */
    .min-height-200 { 
        min-height: 350px; 
        margin: 0px 10px 10px 10px;
        border-radius: 8px;  } 
   
    .min-height-600 { 
        min-height: 600px; 
        margin: 10px 10px 10px 10px;
        border-radius: 8px;
        height:auto;  } 

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
          div.texto_p{
                font-size:17px;
                margin: 0px 10px 10px 10px;
                cursor:pointer;
                font-family: 'Oswald', sans-serif;
          }
   
  </style>

</head>

<body>
    <div class="container-fluid">
     
    <h4 class="card-title text-center"> Tarefas Equipe</h4>
            
     <div class="row">
                
                <div class="col-3  min-height-600 border" ondrop="drop(event)" ondragover="allowDrop(event)" id="tarefa1">
                        <h4 class="text-center" id="move_text" draggable="true" ondragstart="drag(event)"> Equipe</h4>
                </div>

                    <div class="col min-height-600">
                        <div class="row">
                            <div id="tarefa2" class="col border min-height-200" ondrop="drop(event)" ondragover="allowDrop(event)" style="background-color:rgba(250,10,10,0.3)"><h4 class="text-center"> Cozinha</h4></div>
                            <div id="tarefa3" class="col border min-height-200" ondrop="drop(event)" ondragover="allowDrop(event)"style="background-color:rgba(250,250,10,0.3)"><h4 class="text-center"> Dormitório</h4></div>
                            <div id="tarefa4" class="col border min-height-200" ondrop="drop(event)" ondragover="allowDrop(event)"style="background-color:rgba(50,150,100,0.3)"><h4 class="text-center"> Enfermagem</h4></div>
                            <div id="tarefa5" class="col border min-height-200" ondrop="drop(event)" ondragover="allowDrop(event)"style="background-color:rgba(50,150,100,0.3)"><h4 class="text-center"> Manutenção</h4></div>
                            </div>
                        <div class="row">
                            <div id="tarefa6" class="col border min-height-200" ondrop="drop(event)" ondragover="allowDrop(event)"style="background-color:rgba(200,10,100,0.3)"><h4 class="text-center"> Refeitório</h4></div>
                            <div id="tarefa7" class="col border min-height-200" ondrop="drop(event)" ondragover="allowDrop(event)"style="background-color:rgba(100,150,50,0.3)"><h4 class="text-center"> Templo</h4></div>
                            <div id="tarefa8" class="col border min-height-200" ondrop="drop(event)" ondragover="allowDrop(event)"style="background-color:rgba(250,250,250,0.3)"><h4 class="text-center"> Secretária</h4></div>
                            <div id="tarefa9" class="col border min-height-200" ondrop="drop(event)" ondragover="allowDrop(event)"style="background-color:rgba(150,250,100,0.3)"><h4 class="text-center"> Sonoplastia</h4></div>
                            </div>
                       
                    </div>    
            </div>
</div>



<script type="text/javascript">
          window.onload = function() {
     carrega_equipe();       
            
    }


</script>          
      
</body> 
</html> 