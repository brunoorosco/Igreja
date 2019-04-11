<?php
  
  include_once("../../_fonts/config/funcoes.php");
  include_once('../../_fonts/config/banco.php');
  include_once("../../menu.php");
  
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
    <div class="card">
    <div class="card-body">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Procurar</span>
          </div>
          <input type="text" class="form-control" placeholder="Membros" aria-label="Username" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="panel panel-primary">
            <div class="col-lg-12 table-responsive"> <!--     <p>
                <a href="create.php" class="btn btn-success">Adicionar</a>
                </p>-->
                <table class="table table-striped table-sm text-center" id="tabela_membros">
                    <thead >
                        <tr>
                            <th scope="col-lg-6">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <!--<th scope="col">Email</th-->
                            <th scope="col">Aniversário</th>
                            <th scope="col">Função</th>
                            <th scope="col">CEM</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $pdo = Banco::conectar();

                        include_once("./seleciona_usuario.php");
                        
                        while($row = $query->fetch(PDO::FETCH_ASSOC))
                       // $sql = 'SELECT * FROM membros ORDER BY nome ASC LIMIT 10';
                      // foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                      echo '<th class="text-left" scope="row">'. $row['nome'] . '</th>';
                            echo '<td class="text-left">'. $row['endereco'] . '</td>';
                            echo '<td>'. $row['telefone'] . '</td>';
                         //   echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'.date("d/m",strtotime(str_replace('/','-',$row['nasc']))).'</td>';
                            echo '<td>'. $row['cargo'] . '</td>';
                            echo '<td>'. $row['supervisao'] . '</td>';
                            ?>
                            <td>
                           <div class="btn-group btn-sm">
                           <button type="button" class="btn btn-primary fas fa-id-card" data-toggle="modal" data-target="#myModal<?php echo $row['idmembros']; ?>"></button>
                            <button type="button" class="btn btn-warning fas fa-edit" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['idmembros']; ?>" data-whatevernome="<?php echo $row['nome']; ?>"data-whateverdetalhes="<?php echo $row['ende']; ?>"></button>
                            <button type="button" class="btn btn-danger fas fa-trash disabled"></button></div>
                            <?php
                            /*
                            echo '<a class="btn btn-warning btn-sm" href="update.php?id='.$row['idmembros'].'">Editar</a>';
                            echo '';
                            echo '<a class="btn btn-danger btn-sm" href="delete.php?id='.$row['idmembros'].'">Excluir</a>';*/
                            echo '</td>';
                            echo '</tr>';
                            echo '<div class="row"></div>';
                      ?>

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
              <?php  }
                       
                        ?>
                    </tbody>
                </table>
                <nav>
                  <ul class="pagination">
            <?php 
                  while($i <= $quantidade_pg){
                  echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
                  $i++;                    
            }
            Banco::desconectar();?>
              </ul>
              </nav>
           </div>
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
        </div>

        </div>
      </div>


      <script src="membros.js" type="text/javascript"></script>
      
</body>

</html>
