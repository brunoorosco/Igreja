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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Encontrista</title>

    <style type="text/css">
    .table tbody tr:hover td, .table tbody tr:hover th {
        background-color: #9ACD32 !important;
    }
    </style>
</head>

<body>
        <div class="container">
              <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Lista de Encontrista - Encontro <?php echo "teste"; ?> </h3>
                </div>
              </div> 
          <br>
          <div class="panel panel-primary">
               <div class="col-md-12 table-responsive"> <!--     <p>
                    <a href="create.php" class="btn btn-success">Adicionar</a>
                </p>-->

                <table class="table table-striped table-sm table-hover text-center" id="tabela_encontrista">
                    <thead >
                        <tr>

                            <th scope="col-sm-2">Código</th>
                            <th scope="col-sm-2">Nome</th>
                            <!-- <th scope="col">Endereço</th>-->
                            <th scope="col">Telefone</th>
                            <!--<th scope="col">Email</th>-->
                            <!--<th scope="col">Aniversário</th>-->
                             <!--<th scope="col">Função</th>-->
                            <th scope="col">CEM</th>
                            <th scope="col-sm-2">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM encontrista ORDER BY sexoEnc ASC, nomeEnc ASC';
                        $i = 1;
                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
                            echo '<td>'.$i++.'</td>';
			                      echo '<td class="text-left" scope="row">'. $row['nomeEnc'] . '</td>';
                         //   echo '<td>'. $row['endereco'] . '</td>';
                            echo '<td>'. $row['telEnc'] . '</td>';
                         //   echo '<td>'. $row['email'] . '</td>';
                         //   echo '<td>'.date("d/m",strtotime(str_replace('/','-',$row['nasc']))).'</td>';
                         //   echo '<td>'. $row['cargo'] . '</td>';
                            echo '<td>'. $row['CEM'] . '</td>';
                            ?>
                            <td>
                           <div class="btn-group btn-sm">
                           <button type="button" class="btn btn-primary fas fa-id-card" data-toggle="modal" data-target="#myModal<?php echo $row['idEncontrista']; ?>"></button>

                          <!--  <button type="button" class="btn btn-warning fas fa-edit disabled" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['idEncontrista']; ?>" data-whatevernome="<?php echo $row['nomeEnc']; ?>"data-whateverdetalhes="<?php echo $row['']; ?>"></button>

                            <button type="button" class="btn btn-danger fas fa-trash disabled"></button>-->
                          </div>
                            <?php
                            /*
                            echo '<a class="btn btn-warning btn-sm" href="update.php?id='.$row['idEncontrista'].'">Editar</a>';
                            echo '';
                            echo '<a class="btn btn-danger btn-sm" href="delete.php?id='.$row['idEncontrista'].'">Excluir</a>';*/
                            echo '</td>';
                            echo '</tr>';
                            echo '<div class="row"></div>';
                      ?>

          <div class="modal fade" id="myModal<?php echo $row['idEncontrista']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title " id="myModalLabel"><?php echo $row['nomeEnc']; ?></h4>
                      </div>
                      <div class="modal-body">
                          <div class="container-fluid">
                              <div class="form-group row">
                                <div class="col text-left">Aniversário:
                                              <?php echo date("d/m",strtotime(str_replace('/','-',$row['nascEnc'])));?>
                                </div>
                                <div class="col-6">
                                              CEM: <?php echo $row['CEM'];?>
                                </div>
                              </div>
                                <div class="form-group row">
                                      <div class="col text-left">Endereço:
                                              <?php echo $row['endEnc'];?>
                                      </div>
                                </div>
                                <div class="form-group row">
                                     <div class="col text-left">Telefone:  <?php echo $row['telEnc'];?>
                                     </div>
                                </div>
                                <div class="form-group row">
                                      <div class="col text-left">
                                        Observações: <?php echo $row['observacao'];?>
                                      </div>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php  }
                     //   Banco::desconectar();
                        ?>
                    </tbody>
                </table>

        </div></div>
        <div class="container">
        
        <a class="btn btn-Secondary float-left" href="pdf_encontrista.php" role="button" aria-pressed="true"  target="_blank" style="margin-left: 15px !important;">   Imprimir </a>
        </div>    
      <!--mudar editeModal-->
          <div class="modal fade" id="__editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Curso</h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label for="recipient-name" class="control-label">Nome:</label>
                                      <input name="nome" type="text" class="form-control" id="recipient-name">
                                  </div>
                                  <div class="form-group">
                                    <label for="message-text" class="control-label">Detalhes:</label>
                                    <textarea name="detalhes" class="form-control" id="detalhes"></textarea>
                                  </div>
                                <input name="id" type="hidden" class="form-control" id="idrso" value="">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-danger">Alterar</button>

                            </form>
                    </div>
                 </div>
              </div>
            </div>

    
<script src="encontrista.js" type="text/javascript"></script>  

</body>

</html>
