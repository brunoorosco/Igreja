<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
		<<meta charset="utf-8">
		<meta name="description" content="Secretária Virtual da Comunidade Avivamento em Cristo">
		<meta name="keywords" content="Secretária Virtual">
		<meta name="author" content="Comunidade Avivamento em Cristo">

		<link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="_fonts/css/bootstrap.min.css">

		<title>Inscrição de Encontristas</title>


		<script type="text/javascript" src="_fonts/js/bootstrap.js"></script>
		<script type="text/javascript" src="_fonts/js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="_fonts/js/jquery.mask.js"></script>


		
    <style type="text/css">
	  * {
	  box-sizing: border-box;
	  margin: 0;
	 padding: 0;
	}

    html, body{height:100%;}

      body{
        background-image: url(img/efata.jpg);
        background-size: cover;
        color: white;
        background-repeat: no-repeat;
        background-position: center; 
        background-attachment: fixed;
       

      }
      form{
        background: rgba(45, 45, 125, 0.55);
        color: white;
        padding: 40px;
        margin-top: 150px;
        padding-bottom: 60px;
        box-shadow: 10px 10px 5px rgba(6, 1, 1, 0.50);
       
       

      }

      @media(min-width:700px) {
      	 form{
             width: 400px;
             margin-top: 75px;
             margin-left: 10%;

      }
     }

     @media(max-width:680px) {
      	 form{
             width: 400px;
             margin-top: 50px;
             margin-left: -5%;

      }
     }

      h1{
        text-align: center;
      }
      .btn{
        width: 100%;
        border-radius: 0px;
        
      }
      .form-control{
        border-radius: 0px;
        background-color: rgba(23, 3, 3, 0.48);
        color: white;
        border-radius:1px solid #291212
       }

	     .form-signin{
		width: 100%;
		max-width: 600px;
		padding: 15px;
		margin:auto;	
			}
    </style>

    <script type="text/javascript">

		 	  $(document).ready(function(){
				  $('#data').mask('00/00/0000');
				  $('#cep').mask('00000-000');
				  $('.tel').mask('(00) 00000-0000');
				  $('#cpf').mask('000.000.000-00');
				 });
		 </script>

	</head>
<body>
	 
       <div class="container">
       	<div>
       		<div class="row"></div>
       		<div class="col-md-6 offset-md-3">       		   		
			<form  id="" action="cadDB.php" method="post" >
				<h3>Inscrição de Encontristas</h3><br>
				 <div class="form-group ">
				 	<input type="text" name="nome" class="form-control" placeholder="Nome Completo" required="">
				 </div>
				 
				<div class="form-group">
				  	<input type="text" name="endereco" class="form-control" placeholder="Endereço" required="">
				</div>	 
				
				 <div class="form-group">
				 	<input type="text" name="telefone" class="form-control tel" placeholder="Celular com DDD" id="" required="">
				 </div>

				
				<div class="form-group input-group">
				 	 
					    <input type="text" class="form-control cpf" name="cpf" placeholder="CPF" id="cpf" maxlength="14">

					    <input type="text" class="form-control data" name="nascimento" id="data" placeholder="Data de Nascimento" maxlength="10">
					 					  
				</div>

 				<div class="form-group">
				 	<input type="email" name="email" class="form-control" placeholder="seu_email@email" required="">
				</div>

				<div class="form-group">
				 	<input type="text" name="telefone1" class="form-control tel" placeholder="Telefone ...." id="" required="">
				 </div>
				 <div class="form-group">
				 	<input type="text" name="telefone2" class="form-control tel" placeholder="Telefone ...." id="" required="">
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
