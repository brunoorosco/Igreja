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
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Secretaria Encontro</title>
    <script src="./equipe.js" ></script>
    <link rel="stylesheet" type="text/css" href="./style_painel.css" />
   
</head>

<body>
   
     
    <div class="container-fluid rounded" id="faixa">
          <h4 class="text-center text-white">Tarefas Equipe</h4>
    </div>
    <div class="container-fluid">         
     <div class="row">
                
                <div class="col-3  min-height-600 border"  id="tarefa1" style="text-transform: uppercase;">
                        <h4 class="text-center" id="move_text"> Equipe</h4>
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