<?php
	include_once("../../../_fonts/config/banco.php");
	include_once("../../../_fonts/config/funcoes.php");
  include_once( "../../../menu.php");
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

		<title>Jesus lhe aceitou</title>
		<link rel="stylesheet" type="text/css" href="../../../_fonts/css/sweetalert2.min.css">

    <style type="text/css">
	  * {
			  box-sizing: border-box;
			  margin: 0;
			 padding: 0;
			}

    html, body{height:100%;}

      body{
        background-image: url(../../../_fonts/img/efata.jpg);
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

		 .botoes .btn{
	background-color: transparent;
	border-color:  white;
	color: white;
	margin:auto;
	width: 100%;
	border-radius: 8px;
	border-radius:1px solid #291212;
	border-color:1px solid #291212;

}
</style>
	<body>
       <div class="container">
       		<div class="row"></div>
       				<div class="col-md-6 offset-md-3">
									<form  class="formulario" id="form_aceitaJesus_" action="./aceita_DB.php" method="post"  >
										<h3  class="h3"style="text-align: center;">Aceitou/Reconciliou</h3><br>
				 						<div class="form-group ">
				 								<input type="text" name="nome" id="nome"class="form-control" placeholder="Nome Completo" required=""style="border-radius: 8px!important;
			                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important;">
				 						</div>

										<div class="form-group">
										  	<input type="text" name="endereco" id="end" class="form-control" placeholder="Endereço" required=""style="border-radius: 8px!important;
			                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important;">
										</div>

										<div class="form-group input-group">
										 	 <input type="text" name="telefone" class="form-control tel" placeholder="Celular com DDD" id="tel" style="border-radius: 8px!important;
		                   background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; ">
											 <input type="text" class="form-control" name="nascimento" id="data" placeholder="Data de Nascimento" maxlength="10"style="border-radius: 8px!important;
		                   background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; ">
										</div>

							  		<div class="form-group input-group">
											<select class="form-control" id="cargo" name="cargo" style="text: #fff !important;color: gray;border-radius: 8px!important;
	                        background-color: rgba(23, 3, 3, 0.48)!important; ">
														<option disable hidden value="" >Cargo</option>
														<option >Pastor</option>
														<option >Supervisor</option>
														<option >Líder</option>
														<option >Auxiliar</option>
														<option >Anfitrião</option>
														<option >Membro</option>
											 </select>
                       <select class="form-control" id="supervisao" name="supervisao" style="text: #fff !important;color: gray;border-radius: 8px!important;
	                        background-color: rgba(23, 3, 3, 0.48)!important; ">
														<option disable hidden value="" >CEM</option>
														<?php
																		//	require_once 'database.php';	
																		$pdo = Banco::conectar();
																		$sql = "SELECT DISTINCT supervisao FROM membros ";

																		foreach($pdo->query($sql)as $row)
																							{ echo "<option>";
																								echo $row['supervisao'];
																						  	echo "</option>";
																						}
																				Banco::desconectar();

																							?>							
														</select>
										</div>
									
												<div class="form-group input-group">
													<select class="form-control" id="aceitou" name="aceitou" style="text: #fff !important;color: gray;border-radius: 8px!important;
															background-color: rgba(23, 3, 3, 0.48)!important; border-radius:1px solid #291212 !important;">
																<option disable hidden value="">Aceitou/Reconci</option>
																<option >Aceitou</option>
																<option >Reconciliou</option>
														</select>
													<input type="text" class="form-control data" name="cadastro" id="data" placeholder="Data que aceitou" maxlength="10"style="border-radius: 8px!important;
													background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
												</div>
										
											<div class="form-group">
												<div class="btn-group btn-group-toggle botoes btn-block" data-toggle="buttons">
															<label class="btn btn-light active" >
																	<input type="radio" name="TP_BATIZADO" id="1" autocomplete="off" value="sim" checked > Batizado
															</label>
															<label class="btn btn-light">
																	<input type="radio" name="TP_BATIZADO" id="2" autocomplete="off" value="não"> Não Batizado
															</label>
												</div>
										</div>


										
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
		<script type="text/javascript" src="../../../_fonts/js/jquery.mask.min.js"></script>
		<script type="text/javascript" src="../../../_fonts/js/sweetalert2.all.min.js"></script>

	<script type="text/javascript">
	mascara();
		  $('#cargo').change(function(){
	    $(this).css('color', 'white');
	  });
		  $('#supervisao').change(function(){
	    $(this).css('color', 'white');
	  });
		  $('#aceitou').change(function(){
	    $(this).css('color', 'white');
	  });

		$('#cem').css('color','#cccccc');
		$('#cem').attr('disabled', true);

		$(document).ready(function(){ 

	$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
	$('#cargo').css('color', 'gray');
	$('#cem').css('color', 'gray');
	$('#aceitou').css('color', 'gray');
		}); 
		
		$(document).ready(function(){
      				$('#form_aceitaJesus').submit(function(){
								var dados = $(this).serialize();
								  event.preventDefault();
      				 		$.ajax({
      						type:'POST',
      						url: "aceita_DB.php",
      						dataType: 'json',     // para obter a resposta no formato json e rodar no sweetalert2
      						data: dados,
      						success:function(response){ //retorna o echo do php
										console.log(response);
                  	Swal.fire({
      							title: response.mens1,
      							type:  response.mens2,
      							timer: 5000});
                    if(response.mens3 == '4')resetform();

      				 		},
      						erro: function(response) {
                    //console.log(response);
                    alert(response);

      						  Swal.fire({
      						  title: 'Erro ao cadastrar, tente novamente!!!',
      							type: 'error',
      							timer: 5000});
      						}
								});
								$('#cargo').css('color', 'gray');
								$('#supervisao').css('color', 'gray');
								$('#aceitou').css('color', 'gray');

      					return false;
      			   	});
      			});

  </script>

	</body>
</html>
