<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="_fonts/css/bootstrap.css">
    <link rel="stylesheet" href="_fonts/css/estilo.css">
    <title>Membros</title>
</head>

<body>
        <div class="container-fluid">
           
           <!--     <p>
                    <a href="create.php" class="btn btn-success">Adicionar</a>
                </p>-->
                <table class="table table-striped" id="tabela_membros">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col-sm-2">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <!--<th scope="col">Email</th-->
                            <th scope="col">Aniversário</th>
                            <th scope="col">Função</th>
                            <th scope="col">CEM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '_fonts/config/banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM membros ORDER BY idmembros DESC';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                      echo '<th scope="row">'. $row['idmembros'] . '</th>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['endereco'] . '</td>';
                            echo '<td>'. $row['telefone'] . '</td>';
                         //   echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['nasc'] . '</td>';
                            echo '<td>'. $row['cargo'] . '</td>';
                            echo '<td>'. $row['supervisao'] . '</td>';
                            ?>
                            <td>
                          
                           <button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['idmembros']; ?>">Visualizar</button>
                            
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['idCursos']; ?>" data-whatevernome="<?php echo $row['nome']; ?>"data-whateverdetalhes="<?php echo $row['detalhes']; ?>">Editar</button>
                           
                            <button type="button" class="btn btn-sm btn-danger">Apagar</button>
                          
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
                        <h4 class="modal-title text-rigth" id="myModalLabel"><?php echo $row['nome']; ?></h4>
                      </div>
                      <div class="modal-body">
                        <p><?php echo $row['idmembros']; ?></p>
                        <p><?php echo $row['nome']; ?></p>
                  
                      </div>
                    </div>
                  </div>
                </div>
                <?php  }
                     //   Banco::desconectar();
                        ?>
                    </tbody>
                </table>
           
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

    <script src="_fonts/js/jquery-3.3.1.js" ></script>
    <script src="_fonts/js/bootstrap.js"></script>
</body>

</html>
