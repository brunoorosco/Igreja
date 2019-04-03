<?php

	include_once("../../_fonts/config/banco.php");
  	include_once "../../menu.php";
	if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cursos TMAC</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	

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
				<button type="button" class="btn btn-success float-sm-right" data-toggle="modal" data-target="#cad_Modal">Adicionar Curso</button>
				<h3>Lista de Cursos</h3>
			</div>

				<div class="col-lg-12 table-responsive">
					<table class="table table-hover table-sm">
						<thead>
							<tr class="row text-center">
								<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">#</th>
								<th class="col-xs-3 col-sm-3 col-md-3 col-lg-3">Nome do Curso</th>
								<th class="col-xs-3 col-sm-3 col-md-4 col-lg-3">Tema</th>
								<th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Data de Início</th>
								<th class="col-xs-3 col-sm-3 col-md-4 col-lg-3 text-center">Ação</th>
							</tr>
						</thead>
						<tbody>
						<?php
						    $pdo = Banco::conectar();
	               $sql = 'SELECT * FROM infoCursos ORDER BY idcursos asc';
      							foreach($pdo->query($sql)as $row)
                        	{
                        		?>
							    <tr class="row text-center">
									<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><?php echo $row['idCursos']; ?></td>
									<td class="col-xs-3 col-sm-3  col-md-3 col-lg-3"><?php echo $row['nomeCursos']; ?></td>
									<td class="col-xs-3 col-sm-3  col-md-3 col-lg-3"><?php echo $row['tema']; ?></td>
									<td class="col-xs-2 col-sm-2  col-md-2 col-lg-2"><?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))); ?></td>
									<td class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class="btn-group btn-sm">
												<button type="button" class="btn btn-light fas fa-graduation-cap" data-toggle="modal" data-target="#ModalAlunos" data-whatever="<?php echo $row['idCursos']; ?>"></button>
												<button type="button" class="btn btn-primary fas fa-id-card" data-toggle="modal" data-target="#myModal<?php echo $row['idCursos']; ?>" title="Informações Gerais sobre o curso"></button>
												<button type="button" class="btn btn-warning fas fa-edit" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['idCursos']; ?>"
																data-whatevernome="<?php echo $row['nomeCursos'];?>" data-whateverdetalhes="<?php echo $row['tema'];?>" data-whateverdata="<?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))); ?>" title="Editar Curso">
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
													<h4 class="modal-title text-center" id="myModalLabel"><?php echo $row['nomeCursos']; ?></h4>
												</div>
												<div class="modal-body">
														<div class="container-fluid">
															  <div class="form-group row">
																 	<div class="col"><b>Código do Curso:</b> <?php echo $row['idCursos']; ?> </div>
															  </div>
																 <div class="form-group row">
																		<div class="col"><b>Tipo de Curso:</b> <?php echo $row['nomeCursos']; ?></div></div>
																 <div class="form-group row">
																		<div class="col"><b>Tema de Curso:</b> <?php echo $row['tema']; ?></div></div>
																 <div class="form-group row">
																		<div class="col"><b>Data de Início:</b> <?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))); ?></div>
																 </div>
														 </div>
												 </div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->

								<?php } ?>

		<!-- Inicio Modal -->
					<div class="modal fade " id="ModalAlunos" tabindex="-1" role="dialog" aria-labelledby="ModalAlunosLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="ModalAlunosLabel"><p class="text-left"><?php echo $row['nomeCursos']; ?></p></h4>						
									</div>
									<div class="modal-body">
									<input name="id_curso" type="hidden" class="form-control" id="id_curso" value="">
											<div class="container-fluid">
												<div class="row">
												<div class="col-5"><h4><p class="text-left">Participantes</p></h4>  
													  		<div id="part">
							
															</div>
															
																	
													 </div>
													 <div class="col-2"><h5><< >></h5>
													 </div>


													 <div class="col-5"><h4><p class="text-center">Não Participantes</p></h4>    
													 		<div id="no_part" style="margin-left: 50px;">
															 
														

															</div>
																	

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
							<h4 class="modal-title" id="editModalLabel">Curso</h4>
			  		</div>
			  		<div class="modal-body">
                        <form method="POST" action="./processa.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Tipo:</label>
                                <input name="nome" type="text" class="form-control" id="recipient-name">
				            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">Tema:</label>
                                <input name="tema" class="form-control" id="detalhes">
                            </div>
                            <div class="form-group">
                                <label for="dataCurso" class="control-label">Data de Início:</label>
                                <input name="dataCurso_" class="form-control" id="dataCurso" onkeypress="DataHora(event, this)">
                            </div>
														<input name="idCursos" type="hidden" class="form-control" id="id-curso" value="">
														<div class="modal-footer btn-group " role="group">
                              <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-success btn-block" data-dismiss="modal" >Cancelar</button>
                              </div>                                
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-danger btn-block"  name="formulario" value="editar">Alterar</button>
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
							<h4 class="modal-title" id="cad_ModalLabel">Cadastrar Curso</h4>
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
		<script src="ajax.js" type="text/javascript"></script>

	</body>
</html>
