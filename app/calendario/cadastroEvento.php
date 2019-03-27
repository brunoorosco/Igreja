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

		<title>Cadastro Evento</title>
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

select option {
	  background: rgba(255, 255,255);
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
       <div class="container">
       		<div class="row"></div>
       				<div class="col-md-6 offset-md-3">
									<form  class="formulario" id="" action="../../app/calendario/cadastro_evento.php" method="post"  >
										<h3  class="h3" style="text-align: center;">Cadastro de Eventos</h3><br>

                    <div class="form-group ">
				 								<input type="text" name="nome" id="nome" class="form-control" placeholder="Descrição do Evento" required=""style="border-radius: 8px!important;
			                  background-color: rgba(23, 3, 3, 0.60)!important;color: white!important; border-radius:1px solid #291212 !important;">
				 						</div>

										<div class="form-group input-group">
											 <input type="text" class="form-control data" name="datainicio" placeholder="Data de Inicio" id="data" maxlength="10"style="border-radius: 8px!important;
		                   background-color: rgba(23, 3, 3, 0.60)!important;color: white!important; border-radius:1px solid #291212 !important;">

                       <input type="text" name="hora_inicio" class="form-control hora" placeholder="Horário de início" id="hora" data-mask="00:00" style="border-radius: 8px!important;
                       background-color: rgba(23, 3, 3, 0.60)!important;color: white!important; border-radius:1px solid #291212 !important;">
                    </div>

						 				<div class="form-group input-group">
                      <input type="text" class="form-control data" name="datatermino" placeholder="Data de Término" data-mask="00/00/0000" maxlength="10"style="border-radius: 8px!important;
                      background-color: rgba(23, 3, 3, 0.60)!important;color: white!important; border-radius:1px solid #291212 !important;">

                      <input type="text" name="hora_termino" class="form-control hora" placeholder="Horário de término" data-mask="00:00" style="border-radius: 8px!important;
                      background-color: rgba(23, 3, 3, 0.60)!important;color: white!important; border-radius:1px solid #291212 !important;">
                    </div>

										<div class="form-group input-group">
                      <select name="color" id="color" class="form-control" style="text: #fff !important;color: gray;border-radius: 8px!important;
                      background-color: rgba(23, 3, 3, 0.60)!important; border-radius:1px solid #291212 !important;">
                        <option disable hidden value="">Cor p/ Evento</option>
                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                        <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                        <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                        <option style="color:#FF1493;" value="#FF1493">Pink</option>
                        <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                        <option style="color:#228B22;" value="#228B22">Verde</option>
                        <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                      </select>
													<input disabled type="text" name="resp" id= "resp" class="form-control" placeholder="Responsavel pelo cadastro" value="<?php echo $_SESSION['usuario']; ?>" style="border-radius: 8px!important;
				                  background-color: rgba(23, 3, 3, 0.60)!important;color: white!important; border-radius:1px solid #291212 !important;">
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
		<script type="text/javascript" src="../../_fonts/js/jquery.mask.min.js"></script>
		<script type="text/javascript" src="../../_fonts/js/sweetalert2.all.min.js"></script>

	<script type="text/javascript">

		  $('#color').change(function(){
				 var cor = $(this).children("option:selected").val();
	    $(this).css('color', cor);
	  });

		$('#cem').css('color','#cccccc');
		$('#cem').attr('disabled', true);


  </script>

	</body>
</html>
