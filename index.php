<?php
  include_once "menu.php";
  include_once '_fonts/config/banco.php';
  include_once "_fonts/config/funcoes.php";
  calendario();
 ?>

<!DOCTYPE html>
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
		<script src='_fonts/js/jquery-3.3.1.min.js'></script>
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
        eventLimit: true, // allow "more" link when too many events
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
    <div class="row">
      <div class="col-3">
        <div id='calendario'>
               <form id="novo_evento" action="" method="POST">
                    <div class="form-group  mb-2">
                      <label for="nome">Evento</label>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome para Evento">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Início do Evento</label>
                      <input type="date" class="form-control" id="data" name="datainicio">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Término do Evento</label>
                      <input type="date" class="form-control" id="data" name="datatermino">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cor de Indicação</label>
                      <input type="color" class="form-control" id="cor" name="cor">
                    </div>
                   <button type="submit" class="btn btn-primary">Cadastrar Novo Evento</button>
               </form>
           </div>
      </div>
      <div class="col-6">
        <div id='calendar'></div>
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
});</script>

</body>

</html>
