<?php

  include_once("../../../_fonts/config/funcoes.php");
  include_once('../../../_fonts/config/banco.php');
  include_once("../../../menu.php");

  validarUsuario();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <title>Membros</title>
    <style type="text/css">
    .table tbody tr:hover td, .table tbody tr:hover th {
        background-color: #9ACD32 !important;
    }
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  top: 8px;
}

     </style>
</head>

<body>
<body>
<div class="container"> 
<br>
       
            <div class="row">
                  <h4 class="text-info text-center">Cursos Realizado - Escola de Profeta</h4>              
              </div>
           
            <div class="row">
                <div class="col-6">
                    <input type="text" id="user" class="form-control" placeholder="Nome">
                </div>
              
            </div>
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
                              echo '<td>'.date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))).'</td>';
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
                        <tfoot>
                          <tr>
                            <td colspan="12">
                              <i class="fa fa-info-circle"></i>
                              <small>
                                Informações para simples conferência.
                                Os cursos são atualizados somente após o término dos processos de verificação.
                              </small>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                      <div class="row"></div>
                         
                      </div>
                   </section>
                   <nav>
                              <ul class="pagination"></ul>
                          </nav>
      </div>
    

  <script src="./painel.js"></script>
  <script type="text/javascript" src="../../../_fonts/js/jquery.mask.min."></script>
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
         
</body>

</html>
