<?php

		include_once("../../../_fonts/config/banco.php");
		include_once("../../../_fonts/config/funcoes.php");
		include_once("../../../menu.php");
         include_once("./func_sec.php");
        validarUsuario();
	//	if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
		if(($_SESSION['nivel'] != '1') && ($_SESSION['nivel'] != '4'))
		{
			$_SESSION['msg_log'] = "<div id='message' class='alert alert-danger' role='alert'>Você não permissão para acessar esta página!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
					header("Location: $URLBASE");	
		}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Batismo</title>
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		

<style>
  .ui-autocomplete {
		position: absolute;
		z-index: 2150000000 !important;
		cursor: default;
		border: 2px solid #ccc;
		padding: 5px 0;
		border-radius: 2px;
		font-size:15px;
		font-family: 'Oswald', sans-serif;
	}

.custom-control-input:checked ~ .custom-control-label::before {
		color: #fff;
		border-color: #7B1FA2;
		background-color: #7B1FA2;
	}

	.min-height-100 { 
        min-height: 50px; 
        margin: 5px 5px 5px 5px;
        border-radius: 8px;
        background-color: #0099ff;
		color:#ffffff;  
         }
  </style>
	</head>
	<body>
		<div class="container">
			<br>
			<div class="page-header">
				<?php
				if(isset($_SESSION['msg_curso'])){
					echo $_SESSION['msg_curso'];
					unset($_SESSION['msg_curso']);
				}
				?>
				<button type="button" class="btn btn-success float-sm-right" onclick="cadBat()">Novo Batismo</button>
				<h3>Batizados</h3>
			</div>

				<div class="col-lg-12 table-responsive">
					<table class="table table-hover table-sm">
						<thead>
							<tr class="row text-center">
								<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">#</th>
								<th class="col-xs-3 col-sm-3 col-md-3 col-lg-3">Nome </th>
								<th class="col-xs-3 col-sm-3 col-md-4 col-lg-3">Tema</th>
								<th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Data do Batismo</th>
								<th class="col-xs-3 col-sm-3 col-md-4 col-lg-3 text-center">Ação</th>
							</tr>
						</thead>
						<tbody>
						<?php
						    $pdo = Banco::conectar();
	               $sql = 'SELECT * FROM eventos where titulo="Batizado"';
      							foreach($pdo->query($sql)as $row)
                        	{
                        		?>
							    <tr class="row text-center">
									<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><?php echo $row['id']; ?></td>
									<td class="col-xs-3 col-sm-3  col-md-3 col-lg-3"><?php echo "tema"; ?></td>
									<td class="col-xs-3 col-sm-3  col-md-3 col-lg-3"><?php echo $row['titulo']; ?></td>
									<td class="col-xs-2 col-sm-2  col-md-2 col-lg-2"><?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['inicioevento']))); ?></td>
									<?php	  ?>
									<td class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class="btn-group btn-sm">
												<a class="btn btn-light float-left fas fa-print" href="print_batismo.php" role="button" aria-pressed="true"  target="_blank" style="margin-left: 15px !important;" title="Imprimir Batizandos"></a>
												<button type="button" class="btn btn-primary fas fa-user-friends" data-toggle="modal" data-target="#myModal" data-whatever="<?php echo $row['id']; ?>" title="Informações Batizando/CEM"></button>
												<button type="button" class="btn btn-warning fas fa-edit" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['id']; ?>"
																title="Adicionar novo Batizando" data-backdrop="static" data-keyboard="false"
																data-whatevernome="<?php echo $row['id'];?>" data-whateverdetalhes="<?php echo $row['titulo'];?>" 
																data-whateverdata="<?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['inicioevento']))); ?>">
												</button>
												<button type="button" class="btn btn-danger fas fa-trash disabled"   title="Excluir Batizado"></button>
											</div>
									</td>
								</tr>
								<?php } ?>
							</tbody>
					</table>
				</div>
			</div>

	<!-- Inicio Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-center" id="myModalLabel"><?php echo $row['titulo']; ?></h4>
					</div>
					<div class="modal-body">
							<div class="container-fluid" id="principal">
							<!--	<div class =" text-center"    id="batismo0" style="margin-left: 10px;margin-right:10px; margin-top:20px;"> </div>
                                <div class ="row text-center" id="batismo1" style="margin-left: 10px;margin-right:10px;"> </div>
                                <div class ="row text-center" id="batismo2" style="margin-left: 10px;margin-right:10px;"> </div>
                                <div class ="row text-center" id="batismo3" style="margin-left: 10px;margin-right:10px;"> </div>
                                <div class ="row text-center" id="batismo4" style="margin-left: 10px;margin-right:10px;"> </div>
                                <div class ="row text-center" id="batismo5" style="margin-left: 10px;margin-right:10px;"> </div>
                                <div class ="row text-center" id="batismo6" style="margin-left: 10px;margin-right:10px;"> </div>-->
									
							</div>
					</div>
			</div>
		</div>
	</div>
	<!-- Fim Modal -->

								

<!-- Inicio Modal de Cadastramento de Batizandos -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="editModalLabel">Batizando</h4>
				</div>
				<div class="modal-body">
				<div class="container-fluid">              
									<h5 class="alert alert-success text-center" id="msg_bat"></h5>
					</div>
						<form id="form2" method="GET" action="./processa.php" enctype="multipart/form-data">
						<div class="form-group col">
							<label for="recipient-name" class="control-label">Nome:</label>
							<input name="nome" type="text" class="form-control" id="name_bat" placeholder="Nome Completo">
						</div>
						
						<div class="form-group input-group">
							<div class="form-group col">
								<label for="message-text" class="control-label">Aniversário:</label>
								<input name="niver" type="text" class="form-control col" id="data" onkeypress="DataHora(event, this)" placeholder="Aniversário" maxlength="10">
							</div>	
							<div class="form-group col-2">
								<label for="message-text" class="control-label">Sexo:</label>
								<div class="custom-control custom-radio custom-control-inline" style="margin-top:0px">
										<input type="radio" id="customRadioInline1" name="sexo" value="F" class="custom-control-input">
										<label class="custom-control-label" for="customRadioInline1">F</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="customRadioInline2" name="sexo" value="M" class="custom-control-input">
										<label class="custom-control-label" for="customRadioInline2">M</label>
									</div>
														
							</div>
							<div class="form-group col">
								<label for="cem" class="control-label">CEM's:</label>
								<input name="cem_bat" class="form-control" id="cem_bat" Type="text" placeholder="CEM responsável" >
							</div>
						</div>	
								<input name="id_bat" type="hidden" class="form-control" id="id-batizado" value="">
									<div class="modal-footer btn-group " role="group">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-ligth btn-block" data-dismiss="modal" >Cancelar</button>
							</div>                                
							<div class="btn-group" role="group">
								<button type="submit" class="btn btn-Primary btn-block"  name="formulario" value="editar">Salvar</button>
							</div>
						</div>
					</form>
								</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fim Modal de Cadastramento de Batizandos -->

		<script src="batizado.js" type="text/javascript"></script>
		<script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="  crossorigin="anonymous"></script>
		

	</body>
</html>
