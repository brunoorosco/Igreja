///************ função pra adicionar aluno a turma ***************** */   
function enviar_dados(valor, idcurso) {
	//verifica se valores estão chegando corretamente 
	//console.log({ nome: valor , curso: idcurso });
	$.post("turma_db.php", { nome: valor, curso: idcurso })//acesso ao banco declarando as variaveis post e seus valores
		.done(function (data) {
			// alert( "Mensagem: " + data )
			//console.log( "Mensagem: " + data );
		})
		.fail(function (data) {
			alert("Erro: " + data);//se tiver alguma falha no acesso ao banco gerar um alert
		});
}
////////////////////////////////////////////////////////////////////                   

///************ função pra remover aluno a turma ***************** */				
function remove_dados(valor, idcurso) {
	//verifica se valores estão chegando corretamente 
	//console.log({ nome: valor , curso: idcurso });
	$.post("rem_aluno.php", { nome: valor, curso: idcurso })//acesso ao banco declarando as variaveis post e seus valores
		.done(function (data) {
			//		console.log( "Mensagem: " + data );
		})
		.fail(function (data) {
			alert("Erro: " + data);//se tiver alguma falha no acesso ao banco gerar um alert

		});
}
//////////////////////////////////////////////////////////////////// 

///************ função pra ler dados da turma ***************** */
function ler_dados(turma) {
	$(document).ready(function () {
		$('#no_part').empty(); //Limpando a tabela
		$.ajax({
			timeout: 3000,
			type: 'post',		//Definimos o método HTTP usado
			dataType: 'json',	//Definimos o tipo de retorno
			url: 'turmas.php',//Definindo o arquivo onde serão buscados os dados
			data: { curso: turma },//variaveis post e seus valores
			success: function (dados) {
				for (var i = 0; dados.length > i; i++) {
					//Adicionando registros retornados na tabela
					$('#no_part').append('<p id="adic_aluno"><span hidden>' + dados[i].idmembros + '</span>' + dados[i].nome + '</p>');
				}
			},
			error: function (dados) {

				alert("Erro ao enviar dados" + dados.msg);//se tiver alguma falha no acesso ao banco gerar um alert

			}
		});
	});
}
//////////////////////////////////////////////////////////////////// 

///************ função pra ler dados da turma ***************** */   
function ler_dados_add(turma) {
	//alert("pressionou");
	$(document).ready(function () {
		$('#part').empty(); //Limpando a tabela
		$.ajax({
			timeout: 3000,
			type: 'post',		//Definimos o método HTTP usado
			dataType: 'json',	//Definimos o tipo de retorno
			url: 'ler_turma.php',//Definindo o arquivo onde serão buscados os dados
			data: { curso: turma },//variaveis post e seus valores
			success: function (dados) {
				for (var i = 0; dados.length > i; i++) {
					//Adicionando registros retornados na tabela
					$('#part').append('<p id="#" ><span hidden>' + dados[i].idmembros + '</span>' + dados[i].nome + '</p>');
				}
			}
		});
	});
}
//////////////////////////////////////////////////////////////////// 

window.onload = function () {
	//carrega_dados();
};

function carrega_dados(turma) {
	ler_dados(turma);
	ler_dados_add(turma);
	//getUser(turma);
}

///************ função ler botão para remoção do aluno na turma ***************** */     
$(document).on('click', '#remove_aluno', function (e) {
	e.preventDefault();
	//pegarPreco = parseFloat(this.innerHTML);
	pegarAluno = (this.innerHTML);
	pegarAluno = pegarAluno.substr(10, 20).replace(/[^\d]+/g, '');
	var curso = document.getElementById('id_curso').value;
	//	console.log(curso+"remove");
	remove_dados(pegarAluno, curso);
	carrega_dados(curso);
});
//////////////////////////////////////////////////////////////////// 

///************ função ler botão para adição do aluno na turma ***************** */   
$(document).on('click', '#adic_aluno', function (e) {
	e.preventDefault();
	//pegarPreco = parseFloat(this.innerHTML);
	var curso = document.getElementById('id_curso').value;
	//	console.log(curso);
	pegarAluno = (this.innerHTML);
	pegarAluno = pegarAluno.substr(10, 20).replace(/[^\d]+/g, '');
	enviar_dados(pegarAluno, curso);
	carrega_dados(curso);

});
//////////////////////////////////////////////////////////////////// 
// setTimeout(function () {
// 	$(".alert").alert('close');

// }, 3000);

$('#ModalAlunos').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var recipient = button.data('whatever') // Extract info from data-* attributes

	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Cadastro de Alunos')
	modal.find('#id_curso').val(recipient)
	carrega_dados(recipient);
	//console.log(recipient);
});

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

$('#cadAlunos').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var recipient = button.data('whatever') // Extract info from data-* attributes

	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-title').text('Inserir e Ajustar Situação')
	modal.find('#curso').val(recipient)
	carrega_dados(recipient);
	//console.log(recipient);
});

//Mascara para o campo data e hora
function DataHora(evento, objeto) {
	var keypress = (window.event) ? event.keyCode : evento.which;
	campo = eval(objeto);
	if (campo.value == '00/00/0000') {
		campo.value = ""
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
	if ((caracteres.search(String.fromCharCode(keypress)) != -1) && campo.value.length < (10)) {
		if (campo.value.length == conjunto1)
			campo.value = campo.value + separacao1;
		else if (campo.value.length == conjunto2)
			campo.value = campo.value + separacao1;
		else if (campo.value.length == conjunto3)
			campo.value = campo.value + separacao2;
		else if (campo.value.length == conjunto4)
			campo.value = campo.value + separacao3;
		else if (campo.value.length == conjunto5)
			campo.value = campo.value + separacao3;
	} else {
		event.returnValue = false;
	}
}

////////////////////////////////////////////////////////////////
$('#cadAlunos').on('show.bs.modal', function (event) {
	// funções que deseja
	$(this).find('#form_course')[0].reset();
	$('#name_aluno').autocomplete({ source: 'retornoAluno.php', minLength: 3 });

	/* var button = $(event.relatedTarget) // Button that triggered the modal
	   var recipient = button.data('whatever') // Extract info from data-* attributes
	   var recipientnome = button.data('whatevernome')
	   var recipientdetalhes = button.data('whateverdetalhes')
	   var recipientdata = button.data('whateverdata')
	   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	   var modal = $(this)
	   modal.find('.modal-title').text('Batismo: ' + recipient)
	   modal.find('#id-batizado').val(recipient)
	   modal.find('#recipient-name').val(recipientnome)
	   modal.find('#detalhes').val(recipientdetalhes)
	   modal.find('#dataCurso').val(recipientdata)
	   //console.log(recipientdata);*/

});
//////////////////////////////////////////////////////////////////// 


//////////////////////////////////////////////////////////////////// 
$(document).ready(function () {
	document.getElementById("msg_course").style.display = 'none';
	//$('#msg_bat').hide(); 
	// Chamo o Auto complete do JQuery ui setando o id do input, array com os dados e o mínimo de caracteres para disparar o AutoComplete
	//função preencher campos
	$("input[name='nome_aluno']").blur(function () {
		$.getJSON('function.php', {
			nome: $(this).val()
		}, function (json) {
			var items = [];
			var items2 = [];
			for (var i in json) {
				items.push(json[i].supervisao);
				items2.push(json[i].nasc);
			}
			$cem.attr('disabled', true);
			$niver.attr('disabled', true);
			$cem.val(items);
			items2 = items2.reverse();
			$niver.val(items2);
		});
	});

	$('#form_course').submit(function () {

		var dados = $(this).serialize();
		//console.log( dados);
		// alert(JSON.stringify({selec: "10" , funcao: "0", fulano:"0", dados}));
		event.preventDefault();
		$.ajax({
			type: 'post',
			url: "./addAlunos.php",
			dataType: 'json',     // para obter a resposta no formato json e rodar no sweetalert2
			data: dados,
			success: function (response) { //retorna o echo do php
			
				document.getElementById("msg_course").style.display = 'block';
				document.getElementById('msg_course').innerHTML = "Cadastro realizado com Sucesso!!!";

				setTimeout(function () {
					document.getElementById('msg_course').style.display = 'none';
					$('#form_course').trigger("reset");
					//   document.getElementById("msg_bat").remove();
				}, 3000); // 3000 = 3 segundos

			},
			erro: function (response) {
				//console.log(response);
				//	alert(response);

				Swal.fire({
					title: 'Erro ao cadastrar, tente novamente!!!',
					type: 'error',
					timer: 5000
				});
			}
		});

		return false;
	});
});
/////////////////////////////////////////////////////////////////////////////////////////////////