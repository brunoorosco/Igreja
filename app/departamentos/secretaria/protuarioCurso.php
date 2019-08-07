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
</head>
<body>
       <div class="container">
       <form action="" method="post" id="prontuario">
              <div class="row"><br></div>
              <div class="row">
                    <div class="col-sm border rounded"> <label for="inputEmail4">Email1</label> <br><input type="checkbox" name="ch1" aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label for="inputEmail4">Email2</label> <br><input type="checkbox" name="ch2" aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label for="inputEmail4">Email3</label> <br><input type="checkbox" name="ch3" aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label for="inputEmail4">Email4</label> <br><input type="checkbox" name="ch4" aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label for="inputEmail4">Email5</label> <br><input type="checkbox" name="ch5" aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label for="inputEmail4">Email6</label> <br><input type="checkbox" name="ch6" aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label for="inputEmail4">Email7</label> <br><input type="checkbox" name="ch7" aria-label="text input">  SIM</div>
                    <div class="col-sm border rounded"> <label for="inputEmail4">Email8</label> <br><input type="checkbox" name="ch8" aria-label="text input">  SIM</div>               
            </div>
            <br>
          <button type="submit" class="btn btn-success">Salvar</button>
        </form>          
		  			
		</div>
		<script type="text/javascript" src="../../../_fonts/js/jquery.mask.min.js"></script>
		<script type="text/javascript" src="../../../_fonts/js/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="./prontuario.js"></script>

        </body>
</html>
