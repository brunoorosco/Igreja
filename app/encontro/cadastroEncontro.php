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
		<meta name="description" content="Secretária Virtual da Comunidade Avivamento em Cristo">
		<meta name="keywords" content="Secretária Virtual">
		<meta name="author" content="Comunidade Avivamento em Cristo">

		<link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Cadastro de Encontro</title>
	
</head>
<body>

       <div class="container">
       	<div>
       		<div class="row"></div>
       		<div class="col-md-6 offset-md-3">
			<form  id="" action="cadDB.php" method="post" >
				<h3>Cadastro de Encontro</h3><br>
				 <div class="form-group ">
				 	<input type="text" name="nome" class="form-control" placeholder="Nome Completo" required="">
				 </div>

				<div class="form-group">
				  	<input type="text" name="endereco" class="form-control" placeholder="Endereço" required="">
				</div>

				 <div class="form-group">
				 	<input type="text" name="telefone" class="form-control tel" placeholder="Celular com DDD" id="" required="">
				 </div>

				<div class="form-group">
				 	<button type="submit"  id="Confirmar" class="btn btn-dark" style="z-index=1">Confirmar</button>
				</div>



			</form>
		     </div>
		  </div>
		</div>

	</body>
</html>
