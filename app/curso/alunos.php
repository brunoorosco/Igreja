<?php

	include_once("../../_fonts/config/banco.php");
  include_once "../../menu.php";
	if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Alunos</title>

<style>
	.lista{		/*border: 1px solid black;*/
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
 	  alert( "Data Loaded: " + data )

  .fail(function(data) {
     alert( data );
  })
 });

 function remove_dados(valor){
	$.post( "rem_aluno.php" , { nome: valor , curso: "2" })

  .done( function ( data ) {
 	  alert( "Data Loaded: " + data )

  .fail(function(data) {
     alert( data );
  })
 });

	function ler_dados(){
	//alert("pressionou");
	$(document).ready(function(){
	$('#part').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'turmas.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#part').append('<tr><td>'+dados[i].id+'</td><td>'+dados[i].alunos+'</td><td>'+dados[i].curso+'</td></tr>');
				//$('#participantes').append('<label>'+dados[i].id+' <td>'+dados[i].nome+'</td><td>'+dados[i].curso+'</td></label><br>');
		//		$('#participantes').append('<a href="#" class="remove"><span class="valorSpan">'+dados[i].idmembros+' - '+dados[i].nome+'</span><br><a>');
				}
			}
		});
	});
}
window.onload = function() {
	ler_dados();
};

$(document).ready(function () {
    $('.insere span').click(function (e) {
        e.preventDefault();
        //pegarPreco = parseFloat(this.innerHTML);
        pegarAluno = (this.innerHTML);
        enviar_dados(pegarAluno);
				ler_dados();
			//	alert(pegarAluno);
    });
		
});

</script>
</head>
<body>
	<div class="container">
	<br>
	<br>
		<div class="row ">
			<div class="col border border-1 rounded">
				<input type="text" id="x"  />
				<input type="button" value="OK" onclick="escreve()"  />
				<br>
				<?php
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM membros ORDER BY nome ASC';
                        $i = 1;
                        foreach($pdo->query($sql)as $row)
                        {
                            // echo '<li>'.$i++.' - </li>';
											//echo '<td class="text-left" scope="row" id="nome">'.  $row['nomeEnc'] .'</td>';
											echo ' 
														<a href="#" class="insere">
			                 					<span class="valorSpan">'.$row['idmembros'].' - '.$row['nome'].'</span><br>
														</a>';
                        }
                      ?>
			</div>
			<div class="col border border-1 rounded">
			<h3> Participantes </h3>
				<div id="texto">
				<?php
					$pdo = Banco::conectar();
					$sql = "SELECT infocursos.nomeCursos, membros.nome, membros.idmembros	FROM turma INNER JOIN membros
					ON turma.alunos = membros.idmembros INNER JOIN infocursos
					ON turma.curso = infocursos.idCursos WHERE infocursos.idCursos ORDER BY membros.nome ASC";
					
					foreach($pdo->query($sql)as $row){
						// echo '<span>'.$row['nome'] .'</span></br>';
						echo '<div>
									<a href="#" class="insere">
												<span class="valorSpan">'.$row['idmembros'].' - '.$row['nome'].'</span>
									</a>
								</div>
								';
						}
						
				//		if( $total = count($row) == 0) echo "Não há alunos cadastrados neste curso";
					?></div>
					</div> <!--MOSTRA AQUELES QUE ESTÃO INSERIDOS NO EVENTO, CURSO OU/E MINISTÉRIO -->
					<div class="col border border-1 rounded">
						<h3> Participantes </h3>
							<div id="part">
							
							</div>
					
					</div>
			</div>
		</div>
	</div>

</body>
</html>
