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
        background: rgba(45, 45, 125, 0.60);
        color: white;
        padding: 40px;
        margin-top: 100px;
        padding-bottom: 60px;
        padding-bottom: 30px;
        box-shadow: 10px 10px 5px rgba(6, 1, 1, 0.50);
        border-radius:8px;
      }
      @media(min-width:700px) {
      	 .formulario{
            width: 400px;
            margin-top: 30px;
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
            border-radius:5px;
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
	</head>

  <body>
       <div class="container">
       	<div class="row"></div>
       		<div class="col-md-6 offset-md-3">
          	<form class="formulario"  id="formulario_encontrista" action="" method="post" >
          				<h3 class="h3">Inscrição de Encontristas</h3><br>
          				<div class="form-group ">
          				<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Completo" required="" style="border-radius: 8px!important;
                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
          				</div>

          				<div class="form-group">
          				  	<input type="text" name="endereco" id="end" class="form-control" placeholder="Endereço" required=""style="border-radius: 8px!important;
                      background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
          				</div>

          				 <div class="form-group">
          				 	<input type="text" name="telefone" class="form-control tel" placeholder="Celular com DDD" id="tel" required=""style="border-radius: 8px!important;
                    background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">
          				 </div>

          				<div class="form-group input-group">
          					    <select class="form-control" id="sexo" name="sexo" style="text: #fff !important;color: gray;border-radius: 8px!important;
                        background-color: rgba(23, 3, 3, 0.48)!important; border-radius:1px solid #291212 !important;">
          								      <option disable hidden value="">Sexo</option>
          								      <option>Feminino</option>
          								      <option>Masculino</option>
          						    </select>

          					    <select class="form-control" id="cem" name="cem" style="text: #fff !important;color: gray;border-radius: 8px!important;
                        background-color: rgba(23, 3, 3, 0.48)!important; border-radius:1px solid #291212 !important;">
          								      <option disable hidden value="">CEM</option>
          								      <option>CEM1</option>
          								      <option>CEM2</option>
          						    </select>
          				</div>

          			 <div class="form-group input-group">
          				 	<textarea type="text" name="obser" class="form-control" placeholder="Observações" id="am2" style="border-radius: 8px!important;
                    background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;"></textarea>   				 
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
        $('#sexo').change(function(){
          $(this).css('color', 'white');
        });
        $('#cem').change(function(){
          $(this).css('color', 'white');
        });

    //    $('#cem').css('color','#707070');
		    //$('#cem').attr('disabled', true);
		</script>
	</body>
</html>
