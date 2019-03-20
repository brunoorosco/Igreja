<?php

	include_once("../../_fonts/config/banco.php");
  	include_once "../../menu.php";
	if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cursos TMAC</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

<style>
	.lista{		/*border: 1px solid black;*/
	}

  #adic_aluno{
    color: black;
    margin: 5px;
		cursor:pointer;
    
  }
  #adic_aluno:hover {
    background: #e0e0e0;
		width: auto;
  }
	#remove_aluno{
    color: blue;
    margin: 5px;
		cursor:pointer;
    
  }
  #remove_aluno:hover {
    background: #e0e0e0;
		width: auto;
  }
  </style>
	
<script>

var i = 1;
function escreve(){

	var txt_pre_definido = document.getElementById('x').value;
	var t= document.getElementById("texto").innerHTML += "<div class='lista' id='" +i+ "' onclick='apaga(" +i+ ")'>" + txt_pre_definido+"</div>";
	i++;
 }

function escreve_2(valor){
	console.log(valor);
	enviar_dados(valor);
	//var txt_pre = document.getElementById('nome').textContent;
	var txt_pre = valor;
	var t= document.getElementById("texto").innerHTML += "<div class='lista' id='" +i+ "' onclick='apaga(" +i+ ")'>" + txt_pre+"</div>";
	i++;
 }

 function apaga(v){
var divElements = document.getElementsByClassName("lista");
console.log(divElements);

for (var i = 0; i < divElements.length; i++) {
  var idElement = divElements[i].getAttribute('id');
  if (idElement == v) {
	divElements[i].parentNode.removeChild(divElements[i]);
	break;
			  }
	}
}

function enviar_dados(valor){
$.post( "turma_db.php" , { nome: valor , curso: "2" })

.done( function ( data ) {
  // alert( "Mensagem: " + data )
   console.log( "Mensagem: " + data )

.fail(function(data) {
 alert( data );
})
});
}

function remove_dados(valor){
$.post( "rem_aluno.php" , { nome: valor , curso: "2" })

.done( function ( data ) {
  // alert( "Mensagem: " + data )
  console.log( "Mensagem: " + data )

.fail(function(data) {
 alert( data );
	  })
 });
}
	function ler_dados(){
	//alert("pressionou");
	$(document).ready(function(){
	$('#no_part').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'turmas.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				//$('#part').append('<tr><td>'+dados[i].id+'</td><td>'+dados[i].alunos+'</td><td>'+dados[i].curso+'</td></tr>');
				//$('#participantes').append('<label>'+dados[i].id+' <td>'+dados[i].nome+'</td><td>'+dados[i].curso+'</td></label><br>');
				$('#no_part').append('<p id="adic_aluno">'+dados[i].idmembros+' - '+dados[i].nome+'</p>');
				}
			}
		});
	});
}

function ler_dados_add(){
	//alert("pressionou");
	$(document).ready(function(){
	$('#part').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'ler_turma.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
			//	$('#texto').append('<a href="#" class="remove"><span class="valorSpan">'+dados[i].idmembros+' - '+dados[i].nome+'</span><br><a>');
				$('#part').append('<p id="remove_aluno" style="cursor: none important!;">'+dados[i].idmembros+' - '+dados[i].nome+'</p>');
				}
			}
		});
	});
}

window.onload = function() {
carrega_dados();
};

function carrega_dados()
{
	ler_dados();
	ler_dados_add();

}

	$(document).on('click', '#remove_aluno', function(e) {		
			e.preventDefault();
	//pegarPreco = parseFloat(this.innerHTML);
	pegarAluno = (this.innerHTML);
	remove_dados(pegarAluno);
			carrega_dados();
			console.log(this.innerHTML); });

	$(document).on('click', '#adic_aluno', function(e) {		
			e.preventDefault();
	//pegarPreco = parseFloat(this.innerHTML);
	pegarAluno = (this.innerHTML);
	enviar_dados(pegarAluno);
			carrega_dados();
			console.log(this.innerHTML); });


			$(window).load(function(){        
   $('#modalAlunos').modal('show');
	 carrega_dados();
    }); 

</script>


	</head>

	<body>
		<div class="container">
			</br>
			<div class="page-header">
				<?php
				if(isset($_SESSION['msg_curso'])){
					echo $_SESSION['msg_curso'];
					unset($_SESSION['msg_curso']);
				}
				?>
				<button type="button" class="btn btn-success float-sm-right" data-toggle="modal" data-target="#cad_Modal">Adicionar Curso</button>
				<h3>Lista de Cursos</h3>
			</div>

				<div class="col-lg-12 table-responsive">
					<table class="table table-hover table-sm">
						<thead>
							<tr class="row text-center">
								<th class="col-xs-1 col-sm-1 col-md-1 col-lg-1">#</th>
								<th class="col-xs-3 col-sm-3 col-md-3 col-lg-3">Nome do Curso</th>
								<th class="col-xs-3 col-sm-3 col-md-4 col-lg-3">Tema</th>
								<th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Data de Início</th>
								<th class="col-xs-3 col-sm-3 col-md-4 col-lg-3 text-center">Ação</th>
							</tr>
						</thead>
						<tbody>
						<?php
						    $pdo = Banco::conectar();
	               $sql = 'SELECT * FROM infoCursos ORDER BY idcursos asc';
      							foreach($pdo->query($sql)as $row)
                        	{
                        		?>
							    <tr class="row text-center">
									<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><?php echo $row['idCursos']; ?></td>
									<td class="col-xs-3 col-sm-3  col-md-3 col-lg-3"><?php echo $row['nomeCursos']; ?></td>
									<td class="col-xs-3 col-sm-3  col-md-3 col-lg-3"><?php echo $row['tema']; ?></td>
									<td class="col-xs-2 col-sm-2  col-md-2 col-lg-2"><?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))); ?></td>
									<td class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class="btn-group btn-sm">
												<button type="button" class="btn btn-light fas fa-graduation-cap" data-toggle="modal" data-target="#ModalAlunos<?php echo $row['idCursos']; ?>" title="Cadastro de Alunos"></button>
												<button type="button" class="btn btn-primary fas fa-id-card" data-toggle="modal" data-target="#myModal<?php echo $row['idCursos']; ?>" title="Informações Gerais sobre o curso"></button>
												<button type="button" class="btn btn-warning fas fa-edit" data-toggle="modal" data-target="#editModal" data-whatever="<?php echo $row['idCursos']; ?>"
																data-whatevernome="<?php echo $row['nomeCursos'];?>" data-whateverdetalhes="<?php echo $row['tema'];?>" data-whateverdata="<?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))); ?>" title="Editar Curso">
												</button>
												<button type="button" class="btn btn-danger fas fa-trash disabled"title="Excluir Curso"></button>
											</div>

									</td>
								</tr>
								<!-- Inicio Modal -->
									<div class="modal fade" id="myModal<?php echo $row['idCursos']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title text-center" id="myModalLabel"><?php echo $row['nomeCursos']; ?></h4>
												</div>
												<div class="modal-body">
														<div class="container-fluid">
															  <div class="form-group row">
																 	<div class="col"><b>Código do Curso:</b> <?php echo $row['idCursos']; ?> </div>
															  </div>
																 <div class="form-group row">
																		<div class="col"><b>Tipo de Curso:</b> <?php echo $row['nomeCursos']; ?></div></div>
																 <div class="form-group row">
																		<div class="col"><b>Tema de Curso:</b> <?php echo $row['tema']; ?></div></div>
																 <div class="form-group row">
																		<div class="col"><b>Data de Início:</b> <?php echo date("d/m/Y",strtotime(str_replace('/','-',$row['data_']))); ?></div>
																 </div>
														 </div>
												 </div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->


		<!-- Inicio Modal -->
					<div class="modal fade " id="ModalAlunos<?php echo $idCursos=$row['idCursos'];?>" tabindex="-1" role="dialog" aria-labelledby="ModalAlunosLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="ModalAlunosLabel"><p class="text-left"><?php echo $row['nomeCursos']; ?></p></h4>
										
									</div>
									<div class="modal-body">
											<div class="container-fluid">
												<div class="row">
												<div class="col-5"><h4><p class="text-left">Participantes</p></h4>  
													  		<div id="part">
							
															</div>
																		<?php
																		/*

																		$sql = "SELECT infocursos.nomeCursos, membros.nome	FROM turma INNER JOIN membros
																		ON turma.alunos = membros.idmembros INNER JOIN infocursos
																		ON turma.curso = infocursos.idCursos WHERE infocursos.idCursos like $idCursos";

																	foreach($pdo->query($sql)as $row){
																			echo $row['nome'] . '</br>';
																					}
																	//		if( $total = count($row) == 0) echo "Não há alunos cadastrados neste curso";
																	*/	?>

													 </div>
													 <div class="col-2"><h5><< >></h5>
													 </div>


													 <div class="col-5"><h4><p class="text-right">Não Participantes</p></h4>    
													 		<div id="no_part">
							
															</div>


													 </div>
													 </div>
												 </div>
											</div>
									 </div>
							</div>
					</div>
			</div>
			<!-- Fim Modal -->
<?php } ?>
</tbody>
</table>
</div>
</div>
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
				<div class="modal-content">
			  		<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="editModalLabel">Curso</h4>
			  		</div>
			  		<div class="modal-body">
                        <form method="POST" action="./processa.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Tipo:</label>
                                <input name="nome" type="text" class="form-control" id="recipient-name">
				            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">Tema:</label>
                                <input name="tema" class="form-control" id="detalhes">
                            </div>
                            <div class="form-group">
                                <label for="dataCurso" class="control-label">Data de Início:</label>
                                <input name="dataCurso_" class="form-control" id="dataCurso" onkeypress="DataHora(event, this)">
                            </div>
														<input name="idCursos" type="hidden" class="form-control" id="id-curso" value="">
                            <div class="modal-footer" >
                                <button type="button" class="btn btn-success btn-block" data-dismiss="modal" >Cancelar</button>
                                <button type="submit" class="btn btn-danger btn-block"  name="formulario" value="editar">Alterar</button>
                            </div>
                        </form>
									</div>
			        </div>
			    </div>
		    </div>
		</div>

	<div class="modal fade" id="cad_Modal" tabindex="-1" role="dialog" aria-labelledby="cad_ModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="cad_ModalLabel">Cadastrar Curso</h4>
						</div>
					<div class="modal-body">
						<form method="POST" name="formulario" action="./processa.php" enctype="multipart/form-data" VALUE="inserir">
							<div class="form-group">
								<select class="form-control selectpicker" name="nome">
											<option value="" selected disabled>Tipo de Treinamento</option>
											<option>Escola de Profeta</option>
											<option>Discipulado</option>
								</select>
							</div>
							<div class="form-group">
									<input type="text" class="form-control" name="inicio" id="datainicio" placeholder="Data de Início" maxlength="10" onkeypress="DataHora(event, this)">
							</div>
							<div class="form-group">
									<input type="text" class="form-control" name="tema" placeholder="Tema do Curso" maxlength="25">
							</div>
								<div class="modal-footer">
                 	<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
								 	<button type="submit" class="btn btn-success" name="formulario" value="inserir">Incluir</button>
								</div>
							</form>
						</div>
				</div>
			</div>
		</div>


	<script type="text/javascript">
			setTimeout(function() {
				  $(".alert").alert('close');

						}, 3000);

		$('#editModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var recipientnome = button.data('whatevernome')
		  var recipientdetalhes = button.data('whateverdetalhes')
		  var recipientdata = button.data('whateverdata')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('Codigo do Curso: ' + recipient)
		  modal.find('#id-curso').val(recipient)
		  modal.find('#recipient-name').val(recipientnome)
		  modal.find('#detalhes').val(recipientdetalhes)
		  modal.find('#dataCurso').val(recipientdata)
			//console.log(recipientdata);

		});

		//Mascara para o campo data e hora
		function DataHora(evento, objeto){
			var keypress=(window.event)?event.keyCode:evento.which;
			campo = eval (objeto);
			if (campo.value == '00/00/0000'){
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
			if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (10)){
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

  	</script>
	</body>
</html>
