<?php
  include_once "menu.php";
  include_once '_fonts/config/banco.php';
  include_once "_fonts/config/funcoes.php";
//  calendario();
 ?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Secretária Virtual da Comunidade Avivamento em Cristo">
    <meta name="author" content="Comunidade Avivamento em Cristo">

    <title>Portal Comunidade</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="_fonts/css/bootstrap.min.css">
    <link href='_fonts/css/fullcalendar.min.css' rel='stylesheet' />
    <link href='_fonts/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />

    <script src='_fonts/js/moment.min.js'></script>
		<script src='_fonts/js/fullcalendar.min.js'></script>
		<script src='_fonts/js/pt-br.js'></script>
    <script src='_fonts/js/sweetalert2.all.min.js'></script>
    <style type="text/css">

     #conteudo { width: 400px; height: 300px;}

       .dropdown-submenu {
       position: relative;
       }

     .dropdown-submenu a::after {
       transform: rotate(-90deg);
       position: absolute;
       right: 6px;
       top: .8em;
       }

     .dropdown-submenu .dropdown-menu {
       top: 0;
       left: 100%;
       margin-left: .1rem;
       margin-right: .1rem;
       }

       #calendario{
          position: relative;
          width: 100%;  /*respnsavel pelo formulario de eventos*/
          margin: 0px auto;
      }
 </style>

 <script>
$(document).ready(function() {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: Date(),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        //defaultView: 'listWeek',
        eventLimit: true, // allow "more" link when too many events
        eventClick: function(event) {
          $('#visualizar #id').text(event.id);
          $('#visualizar #title').text(event.title);
          $('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
          $('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
          $('#visualizar').modal('show');
          return false;
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end){
          $('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
          $('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
          $('#cadastrar').modal('show');
        },
        events: [ <?php
              $pdo = Banco::conectar();
              $sql = 'SELECT * FROM eventos';
              foreach($pdo->query($sql)as $row_events) { ?>
              {
              id:     '<?php echo $row_events['id']; ?>',
              title:  '<?php echo $row_events['titulo']; ?>',
              start:  '<?php echo $row_events['inicioevento']; ?>',
              end:    '<?php echo $row_events['terminoevento']; ?>',
              color:  '<?php echo $row_events['color']; ?>',
              },<?php
							}
						?>
        ]
      });
    });
    //Mascara para o campo data e hora
    function DataHora(evento, objeto){
      var keypress=(window.event)?event.keyCode:evento.which;
      campo = eval (objeto);
      if (campo.value == '00/00/0000 00:00:00'){
        campo.value=""
      }

      caracteres = '0123456789';
      separacao1 = '/';
      separacao2 = ' ';
      separacao3 = ':';
      conjunto1 = 2;
      conjunto2 = 5;
      conjunto3 = 10;
      conjunto4 = 13;
      conjunto5 = 16;
      if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (19)){
        if (campo.value.length == conjunto1 )
        campo.value = campo.value + separacao1;
        else if (campo.value.length == conjunto2)
        campo.value = campo.value + separacao1;
        else if (campo.value.length == conjunto3)
        campo.value = campo.value + separacao2;
        else if (campo.value.length == conjunto4)
        campo.value = campo.value + separacao3;
        else if (campo.value.length == conjunto5)
        campo.value = campo.value + separacao3;
      }else{
        event.returnValue = false;
      }
    }
    jQuery(document).ready(function(){
    				jQuery('#novo_evento').submit(function(){
    					var dados = $(this).serialize();
    				 		$.ajax({
    						type:'POST',
    						url: "app/calendario/cadastro_evento.php",
    						dataType: 'html',
    						data: dados,
    						success:function(response){ //retorna o echo do php
    							Swal.fire({
    							title: response.mens1,
    							type:  response.mens2,
    							timer: 5000});
    							document.getElementById('#novo_evento').reset();

    				 		},
    						erro: function() {
    						    Swal.fire({
    						    title: 'Erro ao cadastrar, tente novamente!!!',
    							type: 'error',
    							timer: 5000});
    						}
    					});

    					return false;
    			   	});
    			});

  </script>
  </head>
<body>
</br>
  <div class="container-fluid">
    <?php
    if(isset($_SESSION['msg_login'])){
      echo $_SESSION['msg_login'];
      unset($_SESSION['msg_login']);
    }
    ?>

    <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    <div class="row">
      <div class="col-3">

         </div>
      <div class="col-6">
        <div id='calendar'></div>
      </div>
      <div class="col-3">
        <div id='calendar_'></div>
      </div>

    </div>
  </div>

  <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center">Dados do Evento</h4>
        </div>
        <div class="modal-body">
          <dl class="dl-horizontal">
            <dt>Código do Evento</dt>
            <dd id="id"></dd>
            <dt>Titulo do Evento</dt>
            <dd id="title"></dd>
            <dt>Inicio do Evento</dt>
            <dd id="start"></dd>
            <dt>Fim do Evento</dt>
            <dd id="end"></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center">Cadastrar Evento</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="app/calendario/cadastro_evento.php">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" placeholder="Titulo do Evento">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-10 control-label">Cor</label>
              <div class="col-sm-10">
                <select name="color" class="form-control" id="color">
                  <option value="">Selecione</option>
                  <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                  <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                  <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                  <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                  <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                  <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                  <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                  <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                  <option style="color:#228B22;" value="#228B22">Verde</option>
                  <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-10 control-label">Data Inicial</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="datainicio" id="start" onKeyPress="DataHora(event, this)">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-10 control-label">Data Final</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="datatermino" id="end" onKeyPress="DataHora(event, this)">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Cadastrar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
      <script type="text/javascript">
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
          $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');
        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
          $('.dropdown-submenu .show').removeClass("show");
        });
        return false;
      });

      $('#calendar_').fullCalendar({
        defaultView: 'listmonth'
      });
    </script>

  </body>
</html>
