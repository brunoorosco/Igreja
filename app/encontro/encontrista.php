<?php

  include_once "../../menu.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <title>Encontrista</title>

    <style type="text/css">
    .table tbody tr:hover td, .table tbody tr:hover th {
        background-color: #9ACD32 !important;
    }
    </style>
</head>

<body>
        <div class="container">
        </br>
          <div class="page-header">
            <a class="btn btn-Secondary float-right" href="pdf_encontrista.php" role="button" aria-pressed="true"  target="_blank">   Imprimir </a>
                <h3>Lista de Encontrista - Encontro n</h3>
          </div>
          </br>
          <div class="row text-center">
                <div class="col-md-12 table-responsive"> <!--     <p>
                    <a href="create.php" class="btn btn-success">Adicionar</a>
                </p>-->

                <table class="table table-striped table-sm table-hover text-center" id="tabela_membros">
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
                        include '../../_fonts/config/banco.php';
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

                            <button type="button" class="btn btn-warning fas fa-edit disabled" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['idEncontrista']; ?>" data-whatevernome="<?php echo $row['nomeEnc']; ?>"data-whateverdetalhes="<?php echo $row['']; ?>"></button>

                            <button type="button" class="btn btn-danger fas fa-trash disabled"></button>
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

                          <div class="col">Aniversário:
                                        <?php echo date("d/m",strtotime(str_replace('/','-',$row['nascEnc'])));?>
                                    </div>
                          <div class="col-7">Email: <?php echo $row['emailEnc'];?></div>
                        </div>


                            <div class="form-group row">
                                <div class="col">Endereço:
                                        <?php echo $row['endEnc'];?>
                            </div></div>

                             <div class="form-group row">
                                <div class="col">Telefone:  <?php echo $row['telEnc'];?>
                                </div>
                                <div class="col-6">
                                        CEM: <?php echo $row['CEM'];?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                        Amigo 1: <?php echo $row ['amigo1'];
                                        echo " => ";
                                        echo $row['telEncamigo1'];?>
                                </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col">
                                   Amigo 2: <?php echo $row ['amigo2'];
                                   echo " => ";
                                   echo $row['telEncamigo2'];?>
                                 </div>
                            </div>


                          </div></div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php  }
                     //   Banco::desconectar();
                        ?>
                    </tbody>
                </table>

        </div></div></div>
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

       <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var recipientnome = button.data('whatevernome')
          var recipientdetalhes = button.data('whateverdetalhes')
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('ID'+recipient)
          modal.find('#id-curso').val(recipient)
          modal.find('#recipient-name').val(recipientnome)
          modal.find('#detalhes').val(recipientdetalhes)

        });

     </script>


</body>

</html>
