<?php
  
	include_once("../../_fonts/config/funcoes.php");
	include '../../_fonts/config/banco.php';
  include_once "../../menu.php";
  validarUsuario();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Membros</title>
    <style type="text/css">
    .table tbody tr:hover td, .table tbody tr:hover th {
        background-color: #9ACD32 !important;
    }
    </style>
</head>

<body>
   
    <div class="container-fluid">
			<h2>Lista de Membros</h2>
                        <span id="conteudo"></span><br><br><br>
		</div>

<!-------------- MODAL EDIÇÂO ------------------------------------>
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
			  	<div class="modal-content">
			  		<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="editModalLabel">Curso</h4>
			  		</div>
			  	        	<div class="modal-body">
                        <form method="POST" action="./edit_membros.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Nome:</label>
                                <input name="nome" type="text" class="form-control" id="recipient-name">
				                    </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">Endereço:</label>
                                <input name="tema" class="form-control" id="endereco">
                            </div>
                            <div class="form-group input-group">
                                  <div>
                                      <label for="niver" class="control-label">Aniversário:</label>
                                      <input name="niver" class="form-control" id="niver" onkeypress="DataHora(event, this)">
                                  </div>
                                  <div>
                                      <label for="telefone" class="control-label">Telefone:</label>
                                      <input name="telefone" class="form-control" id="tel" onkeypress="DataHora(event, this)">
                                  </div> 
                            </div>
                            <div class="form-group input-group">
                                <input name="idCursos" type="hidden" class="form-control" id="id-curso" value="">
                                <div class="modal-footer btn-group " role="group">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-success btn-block" data-dismiss="modal" >Cancelar</button>
                                    </div>                                
                                    <div class="btn-group" role="group">
                                        <button type="submit" class="btn btn-danger btn-block"  name="formulario" value="editar">Alterar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                      </div>
                  </div>
                </div>
            </div>
<!-------------- FIM DO MODAL EDIÇÂO ------------------------------------>						

<!-------------- MODAL INFORMATIVO ------------------------------------>
								<?php              
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM membros ORDER BY nome ASC';
                        foreach($pdo->query($sql)as $row)
                        {} ?>
						<div class="modal fade" id="myModal<?php echo $row['idmembros']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title " id="myModalLabel"><?php echo $row['nome']; ?></h4>
                      </div>
                      <div class="modal-body">
                       <div class="container-fluid">
                        <div class="form-group row">
                          <div class="col-5">Aniversário:
                                        <?php echo date("d/m",strtotime(str_replace('/','-',$row['nasc'])));?>
                                    </div>
                          <div class="col-7">Email: <?php echo $row['email'];?></div>
                        </div>


                            <div class="form-group row">
                                <div class="col">Endereço:
                                        <?php echo $row['endereco'];?>
                            </div></div>

                             <div class="form-group row">
                                <div class="col">Telefone:  <?php echo $row['telefone'];?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">Cargo:
                                        <?php echo $row['cargo'];?></div>
                                <div class="col-7">
                                        CEM: <?php echo $row['supervisao'];?>
                                </div>
                             </div>

                            <div class="form-group row">
                                <div class="col">Cadastrado:
                                  <?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['cadastro'])));?>
                            </div>
                          </div></div>
                      </div>
                    </div>
                  </div>
                </div>
<!-------------- FIM DO MODAL INFORMATIVO ------------------------------------>


      <script src="membros.js" type="text/javascript"></script>
      <script>
			var qnt_result_pg = 15; //quantidade de registro por página
			var pagina = 1; //página inicial
			$(document).ready(function () {
				listar_usuario(pagina, qnt_result_pg); //Chamar a função para listar os registros
			});
			
			function listar_usuario(pagina, qnt_result_pg){
				var dados = {
					pagina: pagina,
					qnt_result_pg: qnt_result_pg
				}
				$.post('./cad1.php', dados , function(retorna){
					//Subtitui o valor no seletor id="conteudo"
					$("#conteudo").html(retorna);
				});
			}
		</script>

</body>

</html>
