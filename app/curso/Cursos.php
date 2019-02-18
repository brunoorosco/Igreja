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

		<link href="../../_fonts/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<!--<header>--><?php include_once'../../teste.php' ?><!--</header>-->

		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h2>Listar Cursos</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nome do Curso</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
						<?php
						    $pdo = Banco::conectar();
	                        $sql = 'SELECT * FROM infoCursos ORDER BY idcursos asc';

							foreach($pdo->query($sql)as $row)
                        	{
                        		?>
							     <tr>
									<td><?php echo $row['idCursos']; ?></td>
									<td><?php echo $row['nomeCursos']; ?></td>
									<td>
										<button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['idCursos']; ?>">Visualizar</button>

										<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['idCursos']; ?>" data-whatevernome="<?php echo $row['nomeCursos']; ?>"data-whateverdetalhes="<?php echo $row['detalhes']; ?>">Editar</button>

										<button type="button" class="btn btn-sm btn-danger">Apagar</button>
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
												<p><?php echo $row['idCursos']; ?></p>
												<p><?php echo $row['nomeCursos']; ?></p>

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
				<form method="POST" action="http://localhost/Aula/aula_anterior/26-Modal-editar-curso/processa.php" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Nome:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Detalhes:</label>
					<textarea name="detalhes" class="form-control" id="detalhes"></textarea>
				  </div>
				<input name="id" type="hidden" class="form-control" id="id-curso" value="">

				<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-danger">Alterar</button>

				</form>
			  </div>

			</div>
		  </div>
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../_fonts/js/jquery-3.3.1.js" ></script>
    <script src="../../_fonts/js/bootstrap.js"></script>
    <script src="../../_fonts/js/popper.min.js"></script>

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

		})
	</script>
  </body>
</html>
