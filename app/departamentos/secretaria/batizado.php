<?php
        include_once("../../../_fonts/config/banco.php");
       include_once("../../../_fonts/config/funcoes.php");
       include_once("../../../menu.php");
       if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
      
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
    <script type="text/javascript" src="./encontrista.js"></script>


		<title>Inscrição de Encontristas</title>


    <style type="text/css">
    	  * {
        	  box-sizing: border-box;
        	  margin: 0;
        	 padding: 0;
        	}

    html, body{height:100%;}

      body{
        background-image: url(http://localhost/www/igreja/_fonts/img/efata.jpg);
        background-size: cover;
       
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
      }
      .formulario{
        background: rgba(45, 45, 125, 0.60);
        color: white;
        padding: 40px;
        margin-top: 100px;       
        padding-bottom: 40px;
        box-shadow: 10px 10px 5px rgba(6, 1, 1, 0.50);
        border-radius:8px;
      }
      @media(min-width:690px) {
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
             margin-left: -46px;
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
          				<h3 class="h3 text-center">Cadastro</h3><p class="h3 text-center"><?php echo encontro();?></p><br>
          				<div class="form-group ">
          				<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Completo" required="" style="border-radius: 8px!important;
                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;" onkeyup="maiuscula(this)">
          				</div>
        				<div class="form-group input-group">

                        <input type="text" name="nas" id="nas" class="form-control" placeholder="Data de Nascimento" style="border-radius: 8px!important;
                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;">

                      <?php  if(($_SESSION['nivel'] == '1') || ($_SESSION['nivel'] == '4')){ ?>    
          					    <select class="form-control" id="cem_sel" name="cem" style="text: #fff !important;color: gray;border-radius: 8px!important;
                        background-color: rgba(23, 3, 3, 0.48)!important; border-radius:1px solid #291212 !important;">
         					<option disable hidden value="">CEM</option>
							  <option>Aldo</option>
							  <option>Casais</option>
                              <option>Carapicuiba</option>
                              <option>Eliseu /Marlene</option>
                              
                              <option>Gledson /Vanessa</option>
                              <option>Itaqua</option>
                              <option>Itu</option>
                              <option>Jaqueline</option>
                              <option>Jd. kemel</option>
                              <option>Pr. Joel/ Regiane</option>
                              <option>Lika</option>
                              <option>Martins/Shirley</option>
                              <option>Mirtes</option>
                              <option>Novo Tempo(Valdirene)</option>

                              <option>Pr.Bete/ Julio</option>
                              <option>Pr.Laercio/ Vera</option>
                              <option>WAGUERSON</option>
                              <option>Zô</option>
	        						    </select>
                          <?php } else{ ?> 
                          <input type="text" name="cem" id= "cem_input" class="form-control" placeholder="CEM" value="<?php echo carrega_dados(); ?>" style="border-radius: 8px!important;
				                  background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;"> <?php } ?>

          				</div>

          			 <div class="form-group input-group">
          				 	<textarea type="text" name="obser" class="form-control" placeholder="Observações" id="am2" style="border-radius: 8px!important;
                    background-color: rgba(23, 3, 3, 0.48)!important;color: white!important; border-radius:1px solid #291212 !important;" onkeyup="maiuscula(this)"></textarea>   				 
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

	

		<script type="text/javascript">
        $('#sexo').change(function(){
          $(this).css('color', 'white');
        });
        $('#cem_sel').change(function(){
          $(this).css('color', 'white');
        });
        
      $('#cem_input').css('color','a0a0a0');
      $('#cem_input').attr('disabled', true);

        mascara();
    //    $('#cem').css('color','#707070');
		    //$('#cem').attr('disabled', true);
       
		</script>
	</body>
</html>
