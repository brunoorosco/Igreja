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
  <!--<link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">-->
  <!--<link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <style>
    .grade-disciplinas .table th,.grade-disciplinas .table td{border-top:0 solid transparent}
    .grade-disciplinas .table th:last-child, .grade-disciplinas .table td:last-child{white-space:nowrap}
    .grade-disciplinas .table th .fa-clock-o, .grade-disciplinas .table td .fa-clock-o{color:#e4e4e4;margin-right:2px;margin-left:2px}
    .grade-disciplinas .table tr:last-child td{border-bottom:2px solid #BF4631}
    .grade-disciplinas .table tr:first-child td {border-top:2px solid #BF4631}
    .grade-disciplinas .table thead th{border-top:0 solid transparent}


  </style>
  </head>
<body data-open="click" data-menu="vertical-menu"
        data-col="2-columns"
        class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar">

    <div class="app-content content container">
       <div class="content-body">
          
<section id="configuration" class="grade-disciplinas">
  <div class="row">
    <div class="col-xs-12">
      <div class="">
        <div class="">
          <div class="">
            <table class="table table-striped">
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
            $config = carrega_conf("todos_membros");
            include_once("./selecionaDisciplina.php");

                $i = 0;
                while($row = $query->fetch(PDO::FETCH_ASSOC))
                {
                $i += 1;
                    echo '<tr>';
                    echo '<td>'.date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))).'</td>';
                    echo '<td>'. $row['ID'] . '</td>';
                    echo '<td>'. $row['curso'] . '</td>';
                // echo '<td>'. $row['email'] . '</td>';
                    
                if($row['status_'] == "APROVADO")
                    echo '<td> <i class="fa fa-thumbs-up" aria-hidden="true"></i>  '. $row['status_'] . '</td>';
                    //echo '<td>'. $row['supervisao'] . '</td>';
                    else echo '<td> <i class="fa fa-thumbs-down" aria-hidden="true"></i>  '. $row['status_'] . '</td>';
                    ?>
                <td>
                <?php }
                                    
                        ?>
                        </td>
                    </tr>

              </tbody>
              <tfoot>
                <tr>
                  <td colspan="8">
                    <i class="fa fa-info-circle"></i>
                    <small>
                      Informações para simples conferência.
                       As notas são atualizadas somente após o término dos processos de avaliação e revisão.
                    </small>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="waiting-modal modal fade text-xs-left" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <dl class="dl-horizontal">
          
        </dl>
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
    </div>

  <script src="./main.js" data-turbolinks-track="reload"></script>
  <footer class="footer footer-static footer-light navbar-border">
  <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
    <span class="float-md-right d-xs-block d-md-inline-block">
      <img src="#" style="width:60px">
    </span>
  </p>
</footer>
</body>
</html>
