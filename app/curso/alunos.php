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
.lista{
	/*border: 1px solid black;*/
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
	$.post( "turma_db.php" , { nome: "1" , curso: "2" })
 
 
 
 .done( function ( data ) {
 	  alert( "Data Loaded: " + data )

  .fail(function(data) {
     alert( data );
  })
 
 
 });
 
  /*$.ajax({
	url : 'turma_db.php',
	dataType : 'html',
	type : 'POST',
	data : nome = valor,
	beforeSend : function () {
			console.log('Carregando...');
	},
	success : function(retorno){
		alert(retorno);
	},
	error : function(a,b,c){
		alert('Erro: ' + a['status'] + ' ' + c);
		}
	  });*/
	}
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
			                echo '<label class="" id="nome">'.$row['nome'].'</label>';
                        ?>
                           <div class="btn-group btn-sm">
                              <button type="button" class="btn btn-dark btn-sm" style="height: 15px !important;font-size:12px; line-height:5px;" value="<?php  echo $row['nome']; ?>" onclick="escreve_2(this.value)"> >> </button>
                           </div><br>
                            <?php
                        }
                      ?>
			</div>
			<div class="col border border-1 rounded">
				<div id="texto">
				<?php 
					$pdo = Banco::conectar();
					$sql = "SELECT infocursos.nomeCursos, membros.nome	FROM turma INNER JOIN membros
					ON turma.alunos = membros.idmembros INNER JOIN infocursos
					ON turma.curso = infocursos.idCursos WHERE infocursos.idCursos like %1";

					foreach($pdo->query($sql)as $row){
						 echo $row['nome'] . '</br>';
								}
				//		if( $total = count($row) == 0) echo "Não há alunos cadastrados neste curso";
					?></div>
			</div>
		</div>
	</div>
        
        

                   
</body>
</html>