<?php
 
 include_once("../../_fonts/config/funcoes.php");
 include_once('../../_fonts/config/banco.php');
 include_once("../../menu.php");
 
 validarUsuario();
 $encontro = encontro();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">
    
    <title>Encontrista</title>
   
    <style type="text/css">
    .table tbody tr:hover td, .table tbody tr:hover th {
        background-color: #9ACD32 !important;
        cursor:pointer;
    }
    .toolbar {
    float:left;
    margin-left: 350px;
    padding-bottom: -11px;
    }
    .dataTables_length{
      width:300px !important;
    }
    #tabela_encontrista_length{
      width:300px !important;
    }
    
    </style>

</head>

<body>

        <div class="container">
              <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Lista de Encontrista - Encontro nº <?php echo $encontro;?> </h3>
                </div>
              </div> 
          <br>
          <div class="panel panel-primary">
               <div class="col-md-12 table-responsive"> <!--     <p>
                    <a href="create.php" class="btn btn-success">Adicionar</a>
                </p>-->

                <table class="table table-striped table-sm table-hover text-center" id="tabela_encontrista" cellspacing="0" width="100%" >
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
                            <th scope="col">Observação</th>
                         </tr>
                    </thead>
                    <tbody onmousedown="" class="context-menu-one">
                        <?php
                        $pdo = Banco::conectar();
                        //$sql = 'SELECT * FROM encontrista ORDER BY sexoEnc ASC, nomeEnc ASC';
                        $sql = "SELECT * FROM encontro INNER JOIN encontrista
                                  ON encontro.encontrista = encontrista.idEncontrista     
                                  WHERE encontro.n_encontro = '$encontro' 
                                  ORDER BY encontrista.sexoEnc ASC, encontrista.nomeEnc ASC";
                        $i = 1;
                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr class="rows">';
                            echo '<td>'.$i++.'</td>';
			                      echo '<td class="text-left" scope="row">'. $row['nomeEnc'] . '</td>';
                         //   echo '<td>'. $row['endereco'] . '</td>';
                            echo '<td>'. $row['telEnc'] . '</td>';
                         //   echo '<td>'. $row['email'] . '</td>';
                         //   echo '<td>'.date("d/m",strtotime(str_replace('/','-',$row['nasc']))).'</td>';
                         //   echo '<td>'. $row['cargo'] . '</td>';
                            echo '<td>'. $row['CEM'] . '</td>';           
                            echo '<td>'.$row['observacao'].'</td>';
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
                                      <p></p>
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

            <div class="modal fade" id="Modal-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title " id="Modal-infoLabel">  <div id="nome"></div></h4>
                      </div>
                      <div class="modal-body">
                          <div class="container-fluid">
                              <div class="form-group row">
                                 <div class="col-6">
                                      <div id="cem"></div>
                                </div>
                                <div class="col-6">
                                      <div id="tel"></div>
                                </div>
                              </div>
                                <div class="form-group row">
                                      <div class="col text-left">
                                          <div id="endereco"></div>
                                      </div>
                                </div>
                                
                                <div class="form-group row">
                                      <div class="col text-left">
                                         <div id="obs"></div>
                                      </div>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>

    
<script src="encontrista.js" type="text/javascript"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
<script type="text/javascript">
  
/*  $(function(){
    $.contextMenu({
        selector: '.context-menu-one', 
        callback: function(key, options) {
            var m = "clicked: " + key + $(this).text();
            window.console && console.log(m) || alert(m); 
        },
        items: {
            "edit": {name: "Edit", icon: "edit", accesskey: "e"},
            "cut": {name: "Cut", icon: "cut", accesskey: "c"},
            // first unused character is taken (here: o)
            "copy": {name: "Copy", icon: "copy", accesskey: "c o p y"},
            // words are truncated to their first letter (here: p)
            "paste": {name: "Paste", icon: "paste", accesskey: "cool paste"},
            "delete": {name: "Delete", icon: "delete"},
            "sep1": "---------",
            "quit": {name: "Quit", icon: function($element, key, item){ return 'context-menu-icon context-menu-icon-quit'; }}
        }
    });
});*/

$(function(){
    $('#tabela_encontrista').contextMenu({
        selector: 'tr', 
        callback: function(key, options) {
            var m = "clicked: " + key + " on " + $(this).text();
           
           var tableData = $(this).children("td").map(function(){  
              return $(this).text();
            }).get();
            
            nome = $.trim(tableData[1]);
            mouse(nome);
            //window.console && console.log(m) || alert(nome); 
        },
        items: {
         //   "edit": {name: "Edit", icon: "edit"},
         //   "cut": {name: "Cut", icon: "cut"},
         //   "copy": {name: "Copy", icon: "copy"},
         //   "paste": {name: "Paste", icon: "paste"},
            "delete": {name: "Delete", icon: "delete"},
         //   "sep1": "---------",
            "quit": {name: "Quit", icon: function($element, key, item){ return 'context-menu-icon context-menu-icon-quit'; }}
        }
    });
});
    </script>

</body>

</html>
