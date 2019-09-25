<?php

		include_once("../../../_fonts/config/banco.php");
		include_once("../../../_fonts/config/funcoes.php");
		include_once("../../../menu.php");
        include_once("./func_sec.php");
        validarUsuario();
	    //if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
		if(($_SESSION['nivel'] != '1') && ($_SESSION['nivel'] != '4'))
		{
		//	$_SESSION['msg_log'] = "<div id='message' class='alert alert-danger' role='alert'>Você não permissão para acessar esta página!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
					header("Location: http://localhost/www/igreja/");	
        }
        $server = $_SERVER['SERVER_NAME'];
        $endereco = $_SERVER ['REQUEST_URI'];
        $_SESSION['URL'] ="//". $server . $endereco;
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Histórico de Cursos</title>
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<link rel="stylesheet" href="./style.css">
        
        <style>
  
  </style>

</head>
<body>
    <div class="container"><br>
    <?php
				if(isset($_SESSION['msg_curso'])){
					echo $_SESSION['msg_curso'];
					unset($_SESSION['msg_curso']);
				}
				?>
        <div class="row">
            <h4 class="text-center text-info">Histórico de Cursos</h4>
        </div>
        <form method="POST" id="historico">
            <div class="row">
         <!--   <div class="form-check form-check-inline col">
                    <input class="form-check-input" id="dis"type="radio" name="tmac" value="Discipulado">
                    <label class="form-check-label" for="dis"><h6> Discipulado</h6></label>
            </div>
           <div class="form-check form-check-inline col">        
                    <input class="form-check-input" id="esc"type="radio" name="tmac" checked value="Escola de Profeta">
                    <label class="form-check-label" for="esc"> <h6>Escola de Profeta</h6> </label>
                </div>
                <div class="form-group col-4">
                    <input class="form-control" id="curso"type="text" name="curso" placeholder="Nome do Curso">
                </div>
                <div class="form-group col">
                    <button class="form-control btn btn-primary" type="button"  name="data"   >Adicionar Curso</button>
                </div>
               
            </div>-->
            <p id="log"></p>
            <table id="tabela" class="table">
                <thead>
                    <tr>
                        <th colspan="12" style="text-align: center"><label></label></th>
                    </tr>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Status</th>      
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><label for="people1" class="col-form-label">1 </label></td>
                    <td><input type="text" class="form-control autocomplete" name="people1" placeholder="Nome Completo" id="people1"></td>
                    <td >
                        <div class="form-check form-check-inline">
                            <input disabled class="form-check-input" type="radio" name="status1" id="aprovado1" value="A" >
                            <label diasbled class="form-check-label" for="aprovado1">
                                Aprovado
                            </label>
                        </div>
                            <div class="form-check form-check-inline">
                                <input disabled class="form-check-input" type="radio" name="status1" id="reprovado1"  value="R" >
                                <label disabled class="form-check-label" for="reprovado1">
                                    Reprovado
                                </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table><br>

            <button type="button" id="novoCurso" onclick="//adicionaLinha('tabela')"data-toggle="modal" data-target="#newCourse" class="btn btn-primary" data-toggle="modal" data-target="#cadAlunos">Adicionar Curso</button>
            <button type="submit" class="btn btn-success">Salvar Alunos</button>
           <!-- <p class="loading">Loading dots</p>-->
            </form>
  </div>

  
	<div class="modal fade" id="newCourse" tabindex="-1" role="dialog" aria-labelledby="newCourseLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="cad_ModalLabel">Cadastrar Curso</h4>
						</div>
					<div class="modal-body">
						<form method="POST" name="formulario" action="../../curso/processa.php" enctype="multipart/form-data" VALUE="inserir">
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

  <script>

  /*var tabela = document.body.querySelector("table tbody"); // seleciona o corpo da tabela
adicionar.addEventListener("click", function (event) {
   var clone = document.body.querySelectorAll("table tr")[2].cloneNode(true); // seleciona a segunda linha
   var els = clone.querySelectorAll("input"); // seleciona os inputs do clone

   for(var x=0; x<els.length; x++){
      els[x].value = ''; // limpa os campos do clone
      }
console.log(clone)
   tabela.appendChild(clone); // insere o conle na tabela
});*/

 //Funcao adiciona uma nova linha na tabela
 function adicionaLinha(idTabela) {
                var tabela = document.getElementById(idTabela);
                var numeroLinhas = tabela.rows.length;
                var linha = tabela.insertRow(numeroLinhas);
                var celula1 = linha.insertCell(0);
                var celula2 = linha.insertCell(1);   
                var celula3 = linha.insertCell(2); 
                numeroLinhas = parseInt(numeroLinhas-1);
                celula1.innerHTML = '<td><label for="people'+numeroLinhas+'" class="col-form-label">'+ numeroLinhas +'</label></td>'; 
                celula2.innerHTML =   '<td><input type="text" class="form-control autocomplete" name="people'+numeroLinhas+'" placeholder="Nome Completo" id="people'+numeroLinhas+'"/></td>';
                
                celula3.innerHTML =   '<td>'+
                                            '<div class="form-check form-check-inline">'+
                                                '<input disabled class="form-check-input" type="radio" name="status'+numeroLinhas+'" id="aprovado'+numeroLinhas+'" value="A" />'+
                                                '<label disabled class="form-check-label" for="aprovado'+numeroLinhas+'"> Aprovado </label>'+
                                            '</div>'+
                                        '</td>'+
                                        '<td>'+
                                            '<div class="form-check form-check-inline">'+
                                                '<input disabled class="form-check-input" type="radio" name="status'+numeroLinhas+'" id="reprovado'+numeroLinhas+'" value="R"/>'+
                                                '<label disabled class="form-check-label" for="reprovado'+numeroLinhas+'">   Reprovado </label>'+
                                            '</div>'+
                                        '</td>';
                                        MostraDados();
                                    
                           }

                           $(document).on('input', 'input[type=text]', function(){
                            var teste = $(this).val();

                            if(teste.length == 3 ){
                                var ID_input_selecionada = $(this).attr("id"); //pega no id  do input seleciona
                                console.log(ID_input_selecionada);
                                var str = ID_input_selecionada.substr(-1);//pega o ultima caracter do ID
                                 document.getElementById('aprovado'+str).disabled = false;
                                 document.getElementById('reprovado'+str).disabled = false;
                                var filtro = ID_input_selecionada.length; //
                              
                                
                                
                                
                                    
                            }
                            
                           
                        });

               
                           $('#historico').submit(function(){
                            event.preventDefault();
                            var dado = $(this).serialize()
                            var dados = $("#historico :input[value!='']").serialize() // does the job!
                            var formData = $("#historico :input")
                                            .filter(function(index, element) {
                                                return $(element).val() != '';
                                            })
                                            .serialize();
                            console.log(formData);
                            return true;
                            tabela = document.body.querySelector("table > tbody ").rows.length;
                            var na = $(this).find('.status'+i).html();
                           //Salvar Nome do Curso e sua respectiva data
                            var inputCurso = $("#curso").val();
                            var inputData = $("#data").val();
                            var curso = $("#esc").is(":checked");
                                if(curso)curso="Escola de Profeta";
                                    else curso="Discipulado";
                             $.ajax({
                                                type:'POST',
                                                url: "./salvaCurso.php?",
                                                dataType: 'html',     // para obter a resposta no formato json e rodar no sweetalert2
                                                data: {"curso": curso, "data":inputData, "tema":inputCurso},
                                                success:function(response){ //retorna o echo do php
                                                    console.log(response)}
                                                })

                           
                                for(var i=1; i <= tabela ; i++){
                                
                                    var input = $("#people"+i).val();
                                    var name = document.getElementsByName('status'+i);
                                    var marcado = $("#reprovado"+i).is(":checked");
                                        if(marcado) marcado = "R";
                                        else  marcado = "A";
                                        var dados = 
                                        {
                                            "nome": input,
                                            "status_" : marcado,
                                        };
                                    
                                        $.ajax({
                                                type:'POST',
                                                url: "./historicoDB.php?",
                                                dataType: 'html',     // para obter a resposta no formato json e rodar no sweetalert2
                                                data: dados,
                                                success:function(response){ //retorna o echo do php
                                                    console.log(response)}
                                                })
                                        }
  
          return false;
          });
  /////////////////////////////////////////////////////////////////////////////////////////////////

  $(document).ready(function() {
          
		MostraDados();
        $("#data").mask("99/99/9999"); 
        $('#curso').autocomplete({ source: 'retornaCurso.php'});
        $('input.autocomplete').autocomplete({ source: 'retornaMembro.php',  minLength: 3});
        for(var j=1; j<=9;j++)adicionaLinha('tabela');

        setTimeout(function() {
				//document.getElementById("msg_curso").style.display = 'none';
				$('historico').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
			 //   document.getElementById("msg_bat").remove();
			  }, 3000); // 3000 = 3 segundos
       
    })

    setTimeout(function() {
    $(".alert").alert('close');

          }, 3000);
   
   
    function MostraDados()
	{
        $('input.autocomplete').autocomplete({ source: 'retornaMembro.php',  minLength: 3});
        //var trs = document.getElementById( 'tabela ' ).rows ;
        var trs = document.body.querySelector("table > tbody ").rows;
      // console.log(trs)
		var todos = null ;
		for ( var i = 1 ; i < trs.length ; i++ )
		{
			todos = trs[i].cells ;
			for ( var j = 0 ; j < todos.length ; j++ ){}
			//console.log( todos[j].innerHTML, j ) ;

		}
    }
    
    
    
  </script>
  <script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js"  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="  crossorigin="anonymous"></script>
  </body>
  </html>