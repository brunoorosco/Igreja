<?php
      include_once"../../menu.php"
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

		<title>Inscrição de Encontristas</title>


    <style type="text/css">
    	  * {
        	  box-sizing: border-box;
        	  margin: 0;
        	 padding: 0;
        	}

    html, body{height:100%;}

      body{
        background-image: url(../../img/efata.jpg);
        background-size: cover;
        color: white;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;


      }
      .formulario{
        background: rgba(45, 45, 125, 0.55);
        color: white;
        padding: 40px;
        margin-top: 100px;
        padding-bottom: 60px;
        padding-bottom: 30px;
        box-shadow: 10px 10px 5px rgba(6, 1, 1, 0.50);



      }

      @media(min-width:700px) {
      	 .formulario{
             width: 400px;
             margin-top: 40px;
             margin-left: auto;
             margin-right: auto;

      }
     }

     @media(max-width:680px) {
      	 .formulario{
             width: 400px;
             margin-top: 40px;
             margin-left: auto;
             margin-right: auto;


      }
     }

      h1{
        text-align: center;
      }
  	     </style>
	</head>
  <body>
       <div class="container">
       	<div class="row"></div>
       		<div class="col-md-6 offset-md-3">
          	<form class="formulario"  id="ajax_form" action="" method="post" >
          				<h3>Inscrição de Encontristas</h3><br>
          				<div class="form-group ">
          				<input type="text" name="nome" class="form-control" placeholder="Nome Completo" required="" style="border-radius: 0px!important;
                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
          				</div>

          				<div class="form-group">
          				  	<input type="text" name="endereco" class="form-control" placeholder="Endereço" required=""style="border-radius: 0px!important;
                      background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
          				</div>

          				 <div class="form-group">
          				 	<input type="text" name="telefone" class="form-control tel" placeholder="Celular com DDD" id="" required=""style="border-radius: 0px!important;
                    background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
          				 </div>


          				<div class="form-group input-group">

          					    <select class="form-control" id="sexo" name="sexo" style="text: #fff !important;color: gray !important;border-radius: 0px!important;
                        background-color: rgba(23, 3, 3, 0.48)!important; border-radius:1px solid #291212 !important;">
          								<option hidden>Sexo</option>
          								<option>Feminino</option>
          								<option>Masculino</option>
          						</select>

          					    <input type="text" class="form-control data" name="nascimento" id="data" placeholder="Data de Nascimento" maxlength="10"style="border-radius: 0px!important;
                        background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">

          				</div>

           				<div class="form-group">
          				 	<input type="email" name="email" class="form-control" placeholder="seu_email@email" required=""style="border-radius: 0px!important;
                    background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
          				</div>

          				<div class="form-group">
          				 	<input type="text" name="tel1" class="form-control tel" placeholder="Telefone ...." id="" required=""style="border-radius: 0px!important;
                    background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
          				 </div>
          				 <div class="form-group">
          				 	<input type="text" name="tel2" class="form-control tel" placeholder="Telefone ...." id="" required=""style="border-radius: 0px!important;
                    background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
          				 </div>


          				<div class="form-group">
          				 	<button type="submit"  id="Confirmar" class="btn btn-dark" style="z-index=1;width: 100%;
                        border-radius: 0px;">Confirmar</button>
          				</div>



          			</form>
          		     </div>
          		  </div>
          		</div>

		<script type="text/javascript" src="../../_fonts/js/jquery.mask.min.js"></script>
		<script type="text/javascript" src="../../_fonts/js/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="../../_fonts/js/main.js"></script>

		<script type="text/javascript">

  $(document).ready(function(){
			  $('#data').mask('00/00/0000');
			  $('#cep').mask('00000-000');
			  $('.tel').mask('(00) 00000-0000');
			  $('#cpf').mask('000.000.000-00');
			  				 });
		</script>

	</body>
</html>
