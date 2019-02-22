<?php

  require_once '_fonts/config/funcoes.php';

  //session_destroy();

  //validarUsuario();


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12css/dataTables.bootstrap.min.css">

 <!-- Bootstrap core CSS -->
 <link href="_fonts/css/bootstrap.min.css" rel="stylesheet">
 <link href="_fonts/css/dataTables.bootstrap.min.css" rel="stylesheet">
 <!-- Custom styles for this template -->
 <link href="css/menu.css" rel="stylesheet">
</head>
<body>
 <?php //include_once('./menu_administrador.php'); ?>
 <div class="container-fluid">
     <div class="col-lg-12">
         <?php
         if (isset($_SESSION['cadastro_inserido'])) {
             ?>
             <div class="alert alert-success">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong><?php echo $_SESSION['cadastro_inserido']; ?></strong>
             </div>
             <?php
             unset($_SESSION['cadastro_inserido']);
         }
         ?>
         <div class="panel panel-primary">
             <div class="panel-heading">MEMBROS</div>
             <br />
             <div id="filtros">
                 <a id="voltar_pagina" href="index.php" class="btn btn-primary" title="Voltar ao início"><span class="glyphicon glyphicon-home"></span></a>
                 <a id="add_membro" href="" class="pull-right btn btn-primary" title="Adicionar Membro"><span class="glyphicon glyphicon-plus"></span></a>
             </div>
             <br>
             <div class="table-responsive ">
                 <table id="tabela_membros" class="table table-striped table-condensed">
                   <thead >
                       <tr>
                           <th>Nome</th>
                           <th>Endereço</th>
                           <th>Telefone</th>
                           <!--"col">Email</th-->
                           <th>Aniversário</th>
                           <th>Função</th>
                           <th>CEM</th>
                           <th>Ação</th>
                       </tr>
                   </thead>
                     <tbody>
                         <?php
                         include '_fonts/config/banco.php';
                         $pdo = Banco::conectar();
                         $sql = 'SELECT * FROM membros ORDER BY nome ASC';

                         foreach($pdo->query($sql)as $registro)
                         {  ?>
                             <tr>
                                 <td><?php echo $registro['nome']; ?></td>
                                 <td><?php echo $registro['endereco']; ?></td>
                                 <td><?php echo $registro['telefone']; ?></td>
                                <?php echo '<td>'.date("d/m",strtotime(str_replace('/','-',$registro['nasc']))).'</td>';?>
                                 <td style="width:150px"><?php echo $registro['cargo']; ?></td>
                                 <td style="width:150px"><?php echo $registro['supervisao']; ?></td>
                                 <td style="width:150px">
                                     <a href="javascript:;" class="btn btn-info" title="Ver tudo" data-toggle="modal" data-target="#modal_dados<?php echo $registro['idmembros']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                                     <a href="editar_aluno.php?id=<?php echo $registro['idmembros']; ?>" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>
                                     <a href="javascript:func()" onclick="confirmaExclusao('<?php echo $registro['idmembros']; ?>', '<?php echo $registro['nome']; ?>')" class="btn btn-danger" title="Remover"><span class="glyphicon glyphicon-trash"></span></a>
                                         <?php //echo info_modal($registro['idmembros'], $registro['nome'], $registro['instituicao'], $registro['turno'], $registro['numero_bus']) . "\n"; ?>
                                 </td>
                             </tr>
                             <div class="modal fade" id="modal_dados<?php echo $row['idmembros']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                         <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <h4 class="modal-title " id="myModalLabel"><?php echo $row['nome']; ?></h4>
                                         </div>
                                         <div class="modal-body">
                                          <div class="container-fluid">
                                           <div class="form-group row">
                                             <div class="col">Aniversário:
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
                                 <?php  }   Banco::desconectar();  ?>
                              </tbody>
                           </table>
                         </div>
                     </div>
                 </div>
             </div>
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>window.jQuery || document.write('<script src="_fonts/js/jquery-3.3.1.min.js"><\/script>');</script>
 <script src="_fonts/js/bootstrap.min.js"></script>
 <script src="_fonts/js/jquery.dataTables.min.js" type="text/javascript"></script>
 <!-- Scripts -->

 <script type="text/javascript" charset="utf-8">
                                     $(document).ready(function () {
                                         $('#tabela_membros').dataTable();
                                     });

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
