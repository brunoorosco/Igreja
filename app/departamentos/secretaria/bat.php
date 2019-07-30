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
					header("Location: http://localhost/www/igreja/");	
		}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cursos TMAC</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
	
		

<style>
	.lista{		/*border: 1px solid black;*/
	}

  #adic_aluno{
    color: black;
    margin: 5px;
		cursor:pointer;
    
  }
  #adic_aluno:hover {
    background: #e0e0e0;
		width: auto;
  }
	#remove_aluno{
    color: blue;
    margin: 5px;
		cursor:pointer;
    
  }
  #remove_aluno:hover {
    background: #e0e0e0;
		width: auto;
  }

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
				<button type="button" class="btn btn-success float-sm-right" data-toggle="modal" data-target="#cad_Modal">Novo Batismo</button>
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
												<!--<button type="button" class="btn btn-light fas fa-print" data-toggle="modal" data-target="#ModalBatizando" data-whatever="<?php echo $row['id']; ?>"></button>-->
												<a class="btn btn-light float-left fas fa-print" href="print_batismo.php" role="button" aria-pressed="true"  target="_blank" style="margin-left: 15px !important;"></a>
												<button type="button" class="btn btn-primary fas fa-id-card" data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>" title="Informações Gerais sobre o curso"></button>
												<button type="button" class="btn btn-warning fas fa-edit" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['id']; ?>"title="Adicionar novo Batizando"
																data-whatevernome="<?php echo $row['id'];?>" data-whateverdetalhes="<?php echo $row['titulo'];?>" data-whateverdata="<?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['inicioevento']))); ?>" title="Editar Curso">
												</button>
												<button type="button" class="btn btn-danger fas fa-trash disabled"title="Excluir Curso"></button>
											</div>

									</td>
								</tr>

								<!-- Inicio Modal -->
									<div class="modal fade" id="myModal<?php echo $row['idCursos']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title text-center" id="myModalLabel"><?php echo $row['titulo']; ?></h4>
												</div>
												<div class="modal-body">
														<div class="container-fluid">
															  <div class="form-group row">
																 	<div class="col"><b>Código do Curso:</b> <?php echo $row['id']; ?> </div>
															  </div>
																 <div class="form-group row">
																		<div class="col"><b>Tipo de Curso:</b> <?php echo $row['nomeCursos']; ?></div></div>
																 <div class="form-group row">
																		<div class="col"><b>Tema de Curso:</b> <?php echo $row['tema']; ?></div></div>
																 <div class="form-group row">
																		<div class="col"><b>Data de Início:</b> <?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['inicioevento']))); ?></div>
																 </div>
														 </div>
												 </div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->

								<?php } ?>

	<!-- Inicio Modal -->
				<div class="modal fade " id="ModalBatizando" tabindex="-1" role="dialog" aria-labelledby="ModalBatizandoLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="ModalBatizandoLabel"><p class="text-left"><?php echo $row['titulo']; ?></p></h4>						
								</div>
								<div class="modal-body">
								<input name="id_batizado" type="hidden" class="form-control" id="id_batizado" value="">
									<div class="container-fluid">
											<div class="row">
												<div class="col"><h4><p class="text-left">Participantes</p></h4>  
													<div id="part">	</div>
												</div>
											</div>									
										</div>
									</div>
								</div>
						</div>
				</div>
		</div>
		<!-- Fim Modal -->

</tbody>
</table>
</div>
</div>
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="editModalLabel">Batizando</h4>
				</div>
				<div class="modal-body">
					<form id="form2" method="POST" action="./processa.php" enctype="multipart/form-data">
						<div class="form-group col">
							<label for="recipient-name" class="control-label">Nome:</label>
							<input name="nome" type="text" class="form-control" id="name_bat" placeholder="Nome Completo">
						</div>
						
						<div class="form-group input-group">
							<div class="form-group col">
								<label for="message-text" class="control-label">Aniversário:</label>
								<input name="niver" class="form-control col" id="data" onkeypress="DataHora(event, this)" placeholder="Aniversário" maxlength="10">
							</div>	
							<div class="form-group col-2">
								<label for="message-text" class="control-label">Sexo:</label>
								<div class="custom-control custom-radio custom-control-inline" style="margin-top:0px">
										<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
										<label class="custom-control-label" for="customRadioInline1">F</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
										<label class="custom-control-label" for="customRadioInline2">M</label>
									</div>
														
							</div>
							<div class="form-group col">
								<label for="cem" class="control-label">CEM's:</label>
								<input name="cem_bat" class="form-control" id="cem_bat" Type="text" placeholder="CEM responsável" >
							</div>
						</div>	
								<input name="idCursos" type="hidden" class="form-control" id="id-batizado" value="">
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

	<div class="modal fade" id="cad_Modal" tabindex="-1" role="dialog" aria-labelledby="cad_ModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="cad_ModalLabel">Cadastrar Batismo</h4>
						</div>
					<div class="modal-body">
						<form method="POST" name="formulario" action="./processa.php" enctype="multipart/form-data" VALUE="inserir">
							<div class="form-group">
								<select class="form-control selectpicker" name="nome">
											<option value="" selected disabled>Tipo de Treinamento</option>
											<option>Escola de Profeta</option>
											<option>Discipulado</option>
								</select>
							</div>
							<div class="form-group">
									<input type="text" class="form-control" name="inicio" id="datainicio" placeholder="Data de Início" maxlength="10" onkeypress="DataHora(event, this)">
							</div>
							<div class="form-group">
									<input type="text" class="form-control" name="tema" placeholder="Tema do Curso" maxlength="25">
							</div>
								<div class="modal-footer">
                 	<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
								 	<button type="submit" class="btn btn-success" name="formulario" value="inserir">Incluir</button>
								</div>
							</form>

			
						</div>
				</div>
			</div>
		</div>
		<script src="batizado.js" type="text/javascript"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="  crossorigin="anonymous"></script>
		

	</body>
</html>
