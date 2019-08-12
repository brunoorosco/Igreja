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
		<meta name="description" content="Secretária Virtual da Comunidade Avivamento em Cristo">
		<meta name="keywords" content="Secretária Virtual">
		<meta name="author" content="Comunidade Avivamento em Cristo">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Cadastro de Membros</title>
		<link rel="stylesheet" type="text/css" href="../../../_fonts/css/sweetalert2.min.css">
		<link rel="stylesheet" type="text/css" href="./style_painel.css">


 </head>
<body>
       <div class="container mt-3">
       <br>
       <form action="" method="post" id="prontuario">
            <div class="container">
                <h4 class="text-center text-info">Cadastro de Participação de Membros</h4>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <input type="text" id="user" class="form-control" placeholder="Nome">
                </div>
                <div class="col-3">
                    <input type="text" id="userUncao" class="form-control data" placeholder="Inserir data da Unção">
                </div>
            </div>
            <br>
              <div class="form-row text-center ">
                    <div class="col-sm border rounded "> <label  class="form-check-label" for="ch1">CEM's</label> <br> <input type="checkbox" name="ch1" id="ch1"  class="form-check-label" aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label class="form-check-label"for="ch2">Casa de Paz</label> <br><input type="checkbox" name="ch2" id="ch2" class="form-check-label"aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label class="form-check-label"for="ch3">Encontro</label> <br><input type="checkbox" name="ch3" id="ch3" class="form-check-label"aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label class="form-check-label"for="ch4">C.A.E.</label> <br><input type="checkbox" name="ch4" id="ch4" class="form-check-label"aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label class="form-check-label"for="ch5">Batismo</label> <br><input type="checkbox" name="ch5" id="ch5" class="form-check-label"aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label class="form-check-label"for="ch6">Reencontro</label> <br><input type="checkbox" name="ch6" id="ch6" class="form-check-label"aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label class="form-check-label"for="ch7">Discipulado</label> <br><input type="checkbox" name="ch7" id="ch7" class="form-check-label"aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label class="form-check-label"for="ch8">Esc. de Profeta</label> <br><input type="checkbox" name="ch8" id="ch8" class="form-check-label"aria-label="text input">  SIM</div>
              </div>
            <br>
                <div class="row">
                  <h5 class="text-center text-info">Cursos Realizado - Escola de Profeta</h5>              
                </div>
                <div id="fichas"></div> 

          <button type="submit" class="btn btn-success">Salvar</button>
        </form>         
        <div id="fichas"></div> 
		  			
		    </div>
		<script type="text/javascript" src="../../../_fonts/js/jquery.mask.min.js"></script>
		<script type="text/javascript" src="../../../_fonts/js/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="./prontuario.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="  crossorigin="anonymous"></script>
        </body>
</html>
