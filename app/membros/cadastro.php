<?php
	include_once("../../_fonts/config/banco.php");
	include_once("../../_fonts/config/funcoes.php");
  include_once "../../menu.php";
	if(!isset($_SESSION))session_start(); //verifica se a sessão aberta


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
		<link rel="stylesheet" type="text/css" href="../../_fonts/css/sweetalert2.min.css">

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
        margin-top: 150px;
        padding-bottom: 60px;
        box-shadow: 10px 10px 5px rgba(6, 1, 1, 0.50);
				border-radius: 10px;
      }

      @media(min-width:700px) {
      	 .formulario{
             width: 400px;
             margin-top: 70px;
             margin-left: 10%;

      }
     }
     @media(max-width:680px) {
      	 .formulario{
             width: 400px;
             margin-top: 50px;
             margin-left: -5%;
      }
     }

      h1 select{
        text-align: center;
				color: white!important;
				     }

option:not(first-child){
color: white;
  }

	.btn-group-justified {
	  display: table;
	  width: 100%;
		table-layout: fixed;
	  border-collapse: separate; }
	  .btn-group-justified .btn,
	  .btn-group-justified .btn-group {
	  float: none;
	  display: table-cell;
	  width: 1%; }
	  .btn-group-justified .btn .btn,
	  .btn-group-justified .btn-group .btn {
	   width: 100%; }
</style>
	<body>
	<a title='Remover linha' class='deletrow' onclick="confirmExcluir($id)" href='javascript:;'><i class='fa fa-remove resultsfa5'></i></a>
       <div class="container">										

       		<div class="row"></div>
       				<div class="col-md-6 offset-md-3">
									<form  class="formulario" id="ajax_form" action="" method="post"  >
										<h3  class="h3"style="text-align: center;">Cadastro de Membros</h3><br>
				 						<div class="form-group ">
				 								<input type="text" name="nome" id="nome"class="form-control" placeholder="Nome Completo" required=""style="border-radius: 8px!important;
			                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;" onkeyup="maiuscula(this)">
				 						</div>

										<div class="form-group">
										  	<input type="text" name="endereco" id="end" class="form-control" placeholder="Endereço" required=""style="border-radius: 8px!important;
			                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;" onkeyup="maiuscula(this)">
										</div>

										<div class="form-group input-group">
										 	 <input type="text" name="telefone" class="form-control tel" placeholder="Celular com DDD" id="tel" required=""style="border-radius: 8px!important;
		                   background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
											 <input type="text" class="form-control" name="nascimento" id="data" placeholder="Data de Nascimento" maxlength="10"style="border-radius: 8px!important;
		                   background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
										</div>

						 				<div class="form-group">
										 	<input type="email" name="email" id="email" class="form-control" placeholder="seu_email@email" required=""style="border-radius: 8px!important;
		                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
										</div>

										<div class="form-group input-group">
													<select class="form-control" id="cargo" name="cargo" style="text: #fff !important;color: gray;border-radius: 8px!important;
	                        background-color: rgba(23, 3, 3, 0.48)!important; border-radius:1px solid #291212 !important;" >
														<option disable hidden value="" >Cargo</option>
														<option >Bispo</option>
														<option >Pastor</option>
														<option >Supervisor</option>
														<option >Líder</option>
														<option >Auxiliar</option>
														<option >Anfitrião</option>
														<option >Membro</option>
													</select>
													<input type="text" name="supervisao" id= "cem" class="form-control" placeholder="CEM" value="<?php echo carrega_dados(); ?>" style="border-radius: 8px!important;
				                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
										
													</div>

										<!--<div class="form-group">
										 	<input type="password" name="senha" id="senha" class="form-control" placeholder="digite uma senha" required=""style="border-radius: 8px!important;
		                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
										</div>-->

										<div class="btn-group btn-group-justified" role="group">
											 <div class="btn-group" role="group">
													<button type="reset"  id="reset" class="btn btn-dark btn-block" style="z-index=1;width:100%;
															border-radius: 8px;border-color: #707070 !important;focus-color:#fff;">Limpar</button>
											 </div>
											 <div class="btn-group " role="group">
												 <button type="submit"  id="Confirmar" class="btn btn-dark btn-block" style="z-index=1;width: 100%;
														border-radius: 8px;border-color: #707070 !important;">Confirmar</button>
											  </div>
											</div>
								</form>
		     			</div>
		  			</div>
				</div>
		<script type="text/javascript" src="../../_fonts/js/jquery.mask.min.js"></script>
		<script type="text/javascript" src="../../_fonts/js/sweetalert2.all.min.js"></script>
		<script type="text/javascript" src="./membros.js"></script>
	
	<script type="text/javascript">
		  $('#cargo').change(function(){
			$(this).css('color', 'white');
		  });

			
		$('#cem').css('color','gray');
		$('#cem').attr('disabled', true);

	//	$('#senha').attr('disabled', true);
	//	$('#senha').hide();
/*
		function Ocultar(){
				var ref_select = document.getElementById('cargo');
				var ref_input = document.getElementById('senha');
				var valor = ref_select.value;
					if (ref_select.value != "Bispo"){
						$('#senha').hide();						
						ref_input.disabled = true;
					}
					else
					{
						$('#senha').show();
						ref_input.disabled = false;
					}
		}*/

			
  </script>

	</body>
</html>
