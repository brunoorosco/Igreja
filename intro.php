<?php
  include_once "menu.php";

  	$servidor = "localhost";
  	$usuario = "root";
  	$senha = "";
  	$dbname = "test";

  	//Criar a conexao
  	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_events = "SELECT id, title, color, start, end FROM events";
$resultado_events = mysqli_query($conn, $result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset='utf-8' />
			<link href='_fonts/css/fullcalendar.min.css' rel='stylesheet' />
			<link href='_fonts/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
			<link href='_fonts/css/personalizado.css' rel='stylesheet'/>



			<script src='_fonts/js/moment.min.js'></script>
      <script src='_fonts/js/jquery.min.js'></script>
		  <script src='_fonts/js/fullcalendar.min.js'></script>
			<script src='_fonts/locale/pt-br.js'></script>

		<script>
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
					events: [
						<?php
							while($row_events = mysqli_fetch_array($resultado_events)){
								?>
								{
								id:       '<?php echo $row_events['id']; ?>',
								title:    '<?php echo $row_events['title']; ?>',
								start:    '<?php echo $row_events['start']; ?>',
								end:      '<?php echo $row_events['end']; ?>',
								color:    '<?php echo $row_events['color']; ?>',
								},<?php
							}
						?>
					]
				});
			});
		</script>
	</head>
	<body>

		<div id='calendar' style="font-family: Lucida Grande,Helvetica,Arial,Verdana,sans-serif;
	font-size: 14px;"></div>

	</body>
</html>
