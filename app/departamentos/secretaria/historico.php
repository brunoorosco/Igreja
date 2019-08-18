<?php

		include_once("../../../_fonts/config/banco.php");
		include_once("../../../_fonts/config/funcoes.php");
		include_once("../../../menu.php");
         include_once("./func_sec.php");
        //validarUsuario();
	//	if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
		if(($_SESSION['nivel'] != '1') && ($_SESSION['nivel'] != '4'))
		{
			$_SESSION['msg_log'] = "<div id='message' class='alert alert-danger' role='alert'>Você não permissão para acessar esta página!!!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
					header("Location: http://localhost/www/igreja/");	
		}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Batismo</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		

</head>
<body>
    <div class="container"><br>
        <div class="row">
            <h4 class="text-center text-info">Histórico de Cursos</h4>
        </div><br>
        <form method="POST" id="historico">
            <div class="row">
                <div class="form-group col">
                    <input class="form-control" id="curso"type="text" name="curso" placeholder="Nome do Curso">
                </div>
                <div class="form-group col-3">
                    <input class="form-control" id="data" type="text" name="data" placeholder="Data inicial do curso">
                </div>
            </div>
            <table id="tabela" class="table">
                <thead>
                    <tr>
                        <th colspan="12" style="text-align: center"><label>Membros</label></th>
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
                            <input class="form-check-input" type="radio" name="status1" id="aprovado2" value="A" >
                            <label class="form-check-label" for="aprovado1">
                                Aprovado
                            </label>
                        </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status1" id="reprovado1"  value="R" checked>
                                <label class="form-check-label" for="reprovado1">
                                    Reprovado
                                </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table><br>

            <button type="button" id="adicionar" onclick="adicionaLinha('tabela')" class="btn btn-primary">Adicionar</button>
            <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
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
                                                '<input class="form-check-input" type="radio" name="status'+numeroLinhas+'" id="aprovado'+numeroLinhas+'" value="A" checked/>'+
                                                '<label class="form-check-label" for="aprovado'+numeroLinhas+'"> Aprovado </label>'+
                                            '</div>'+
                                        '</td>'+
                                        '<td>'+
                                            '<div class="form-check form-check-inline">'+
                                                '<input class="form-check-input" type="radio" name="status'+numeroLinhas+'" id="reprovado'+numeroLinhas+'" value="R"/>'+
                                                '<label class="form-check-label" for="reprovado'+numeroLinhas+'">   Reprovado </label>'+
                                            '</div>'+
                                        '</td>';
                                        MostraDados();
                           }

               
                           $('#historico').submit(function(){
                            tabela = document.body.querySelector("table > tbody ").rows.length;
                            var na = $(this).find('.status'+i).html();
                            console.log(na)
                            for(var i=1; i <= tabela ; i++){
                            
                                var input = $("#people"+i).val();
                                var name = document.getElementsByName('status'+i);
                                var marcado = $("#reprovado"+i).is(":checked");
                                    if(marcado){
                                    marcado = "R";
                                    }else{
                                    marcado = "A";
                                    }
                               console.log(input,marcado)
                            }
                        
              var dados = $(this).serialize();
              // alert(JSON.stringify({selec: "10" , funcao: "0", fulano:"0", dados}));
              event.preventDefault();
              /*
              $.ajax({
              type:'GET',
              url: "./equipeDB.php",
              dataType: 'json',     // para obter a resposta no formato json e rodar no sweetalert2
              data: dados,
              success:function(response){ //retorna o echo do php
                  document.getElementById("msg_bat").style.display = 'block';
                  document.getElementById("msg_bat").innerHTML = "Cadastro realizado com Sucesso!!!";
                  setTimeout(function() {
                      document.getElementById("msg_bat").style.display = 'none';
                      $('form').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
                   //   document.getElementById("msg_bat").remove();
                    }, 3000); // 3000 = 3 segundos
                
              },
              erro: function(response) {
                  //console.log(response);
                  alert(response);
  
                  Swal.fire({
                  title: 'Erro ao cadastrar, tente novamente!!!',
                  type: 'error',
                  timer: 5000});
              }
          });*/
  
          return false;
          });
  /////////////////////////////////////////////////////////////////////////////////////////////////

  window.onload = function(){
		MostraDados();
        $("#data").mask("99/99/9999"); 
        $('#curso').autocomplete({ source: 'retornaMembro.php',  minLength: 3});
        $('input.autocomplete').autocomplete({ source: 'retornaMembro.php',  minLength: 3});
       
	}

    function MostraDados()
	{
        $('input.autocomplete').autocomplete({ source: 'retornaMembro.php',  minLength: 3});
        //var trs = document.getElementById( 'tabela ' ).rows ;
        var trs = document.body.querySelector("table > tbody ").rows;
      // console.log(trs)
		var todos = null ;
		for ( var i = 0 ; i < trs.length ; i++ )
		{
			todos = trs[i].cells ;
			for ( var j = 0 ; j < todos.length ; j++ ){}
			//console.log( todos[j].innerHTML, j ) ;

		}
    }
    
    
    
  </script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="  crossorigin="anonymous"></script>
  </body>
  </html>