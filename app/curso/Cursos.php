<?php

	include_once("../../_fonts/config/banco.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cursos TMAC</title>

		<link rel="stylesheet" href="_fonts/css/bootstrap.min.css">
		<link rel="stylesheet" href="_fonts/css/estilo.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">



	</head>
	<body>
		<!--<header>--><?php //include_once'../../teste.php' ?><!--</header>-->
		<div class="card">
	  <div class="card-body">
				<button type="button" class="btn btn-success" style="width: 15%; height: 15%;">Adicionar Curso</button>
	  </div>
	</div>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h2>Lista de Cursos</h2>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<table class="table">
						<thead>
							<tr class="row">
								<th class="col-xs-2 col-sm-2 col-md-2 col-lg-1">#</th>
								<th class="col-xs-6 col-sm-6 col-md-6 col-lg-4">Nome do Curso</th>
								<th class="col-xs-6 col-sm-6 col-md-6 col-lg-4">Tema</th>
								<th class="col-xs-4 col-sm-4 col-md-4 col-lg-3">Ação</th>
							</tr>
						</thead>
						<tbody>
						<?php
						    $pdo = Banco::conectar();
	                        $sql = 'SELECT * FROM infoCursos ORDER BY idcursos asc';

							foreach($pdo->query($sql)as $row)
                        	{
                        		?>
							    <tr class="row">
									<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><?php echo $row['idCursos']; ?></td>
									<td class="col-xs-4 col-sm-4  col-md-4 col-lg-4"><?php echo $row['nomeCursos']; ?></td>
									<td class="col-xs-4 col-sm-4  col-md-4 col-lg-4"><?php echo $row['tema']; ?></td>
									<td class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class="btn-group btn-sm">
												<button type="button" class="btn btn-primary fas fa-id-card" data-toggle="modal" data-target="#myModal<?php echo $row['idCursos']; ?>"></button>
												<button type="button" class="btn btn-warning fas fa-edit" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['idcursos']; ?>" data-whatevernome="<?php echo $row['nome']; ?>"data-whateverdetalhes="<?php echo $row['tema']; ?>"></button>
												<button type="button" class="btn btn-danger fas fa-trash disabled"></button>
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
													 <div class="col"><b>Código do Curso:</b> <?php echo $row['idCursos']; ?> </div></div>
													 <div class="form-group row">
															<div class="col"><b>Tipo de Curso:</b> <?php echo $row['nomeCursos']; ?></div></div>
													 <div class="form-group row">
															<div class="col"><b>Tema de Curso:</b> <?php echo $row['tema']; ?></div></div>
															</div>
										</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>
		</div>

			<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  	<div class="modal-dialog" role="document">
						<div class="modal-content">
			  			<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="exampleModalLabel">Curso</h4>
			  			</div>
			  			<div class="modal-body">
							<form method="POST" action="app/curso/processa.php" enctype="multipart/form-data">
							  <div class="form-group">
										<label for="recipient-name" class="control-label">Tipo:</label>
										<input name="nome" type="text" class="form-control" id="recipient-name">
							  </div>
									  <div class="form-group">
										<label for="message-text" class="control-label">Tema:</label>
										<input name="tema" class="form-control" id="detalhes"></input>
							  </div>

								<input name="idCursos" type="hidden" class="form-control" id="id-curso" value="">

							<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-danger">Alterar</button>

							</form>
			  </div>

			</div>
		  </div>
		</div>

	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var recipientnome = button.data('whatevernome')
		  var recipientdetalhes = button.data('whateverdetalhes')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('ID ' + recipient)
		  modal.find('#id-curso').val(recipient)
		  modal.find('#recipient-name').val(recipientnome)
		  modal.find('#detalhes').val(recipientdetalhes)

		});
	</script>
	<script src="_fonts/js/jquery-3.3.1.js" ></script>
	<script src="_fonts/js/bootstrap.js"></script>
  </body>
</html>
