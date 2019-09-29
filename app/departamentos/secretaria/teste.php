<?php
  
  include_once("../../../_fonts/config/funcoes.php");
  include_once('../../../_fonts/config/banco.php');
  include_once("../../../menu.php");
  
//  validarUsuario();
?>
<!DOCTYPE html>
<html lang="pt-br" data-textdirection="ltr" class="loading">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Bruno Orosco">
  <title>teste</title>
  <link href="//fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./style.css">

 </head>
<body>
<div class="container"> 
<br>
       
            <div class="row">
                  <h4 class="text-info text-center">Cursos Realizado - Escola de Profeta</h4>              
              </div>
              <form id="form2" method="POST" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <input type="text" id="user" name="user" class="form-control user-input" placeholder="Nome">
                </div>
              
                <div class="col-1">
                    <button id="btn_consulta" class="btn btn-primary">Consultar</button>
                </div>
              
            </div>
            </form>
            <br>
            <section id="configuration" class="grade-disciplinas">
            <div class="table-responsive">
                 <table class="table table-striped table-sm" id="tabela_disciplina">
                        <thead>
                          <tr>
                            <th>Data</th>
                            <th>Código</th>
                            <th>Disciplina</th>
                            <th>Situação</th>
                          </tr>
                        </thead>
                        <tbody>
                      
                        <?php

                      $pdo = Banco::conectar();
                   //   $config = carrega_conf("todos_membros"); //função painel de controle para mostrar todos os membros
                      include_once("./selecionaDisciplina.php");

                          $i = 0;
                          while($row = $query->fetch(PDO::FETCH_ASSOC))
                          {
                          $i += 1;
                              echo '<tr>';
                              echo '<td class="editable">'.date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))).'</td>';
                              echo '<td class="text-left" >'. $row['ID'] . '</td>';
                              echo '<td>'. $row['curso'] . '</td>';
                                                 
                          if($row['status_'] == "APROVADO")
                              echo '<td class="text-success"> <i class="fa fa-thumbs-up " aria-hidden="true"></i>  '. $row['status_'] . '</td>';
                              
                              else echo '<td class="text-danger"> <i class="fa fa-thumbs-down red" aria-hidden="true"></i>  '. $row['status_'] . '</td>';
                              ?>
                          
                          <?php }
                                              
                                  ?>
                                 
                              </tr>

                        </tbody>
                       
                      </table>
                      </div>
                          <nav>
                              <button id="offer-edit-button" class="mybutton btn btn-primary right">Edit mode</button>
                              <ul class="pagination"></ul>
                          </nav>
                          <div class="border-top border-bottom border-danger">
                          <tr>
                            <td colspan="12">
                              <i class="fa fa-info-circle"></i>
                              <small>
                                Informações para simples conferência.
                                Os cursos são atualizados somente após o término dos processos de verificação.
                              </small>
                            </td>
                          </tr>
                        </div>
                      </div>
                   </section>
           
      </div>
    

  <script src="./painel.js"></script>
  <script src="./prontuario.js"></script>
  <script type="text/javascript" src="../../../_fonts/js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="../../../_fonts/js/sweetalert2.all.min.js"></script>
	<script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="  crossorigin="anonymous"></script>
     <script>
      
     </script>

  <footer class="footer footer-static footer-light navbar-border">
  <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
    <span class="float-md-right d-xs-block d-md-inline-block">
      <img src="#" style="width:60px">
    </span>
  </p>
</footer>
</body>
</html>
