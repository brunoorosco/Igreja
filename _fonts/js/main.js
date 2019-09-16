/*(function($){
  $(function(){
			  $('#data').mask('00/00/0000');
			  $('.data').mask('00/00/0000');
			  $('#cep').mask('00000-000');
			  $('.tel').mask('(00) 00000-0000');
			  $('#cpf').mask('000.000.000-00');
          });
    })(jQuery);*/
////////////////////////////////////////////////////////////////////////////////////////////
	function mascara(){	
			  $('#data').mask('00/00/0000');
			  $('.data').mask('00/00/0000');
			  $('#cep').mask('00000-000');
			  $('.tel').mask('(00) 00000-0000');
			  $('#tel_fixo').mask('(00) 0000-0000');
				$('#cpf').mask('000.000.000-00');
				
	}
//////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////
$(document).ready(function(){
////////////////////////////////////////////////////////////////////////////
		$('#ajax_form').submit(function(){
			var cargo = $('#cargo').val();
			var dados = $(this).serialize();
			event.preventDefault();
			$.ajax({
			type:'POST',
			url: "../../app/membros/cadDB.php",
			dataType: 'json',     // para obter a resposta no formato json e rodar no sweetalert2
			data: dados,
			success:function(response){ //retorna o echo do php
					if(response.mens1 == '1' && (cargo == 'Bispo') || (cargo == 'Pastor') || (cargo == 'Supervisor')  )senha();

						if(response.mens1 == '1' && (cargo == 'Líder') || (cargo == 'Auxiliar') || (cargo == 'Membro') || (cargo == 'Anfitrião') ){
						Swal.fire({
						title: 'Cadastro realizado com sucesso!!!',
						type:  'success',
						timer: 5000});
					//	window.location.reload(1);
					}

				// se mens3 igual a 2 - indica que este cadastro já existe, possibilitando a edição do mesmo
					if(response.mens3 == '2'){
						Swal.fire({
							title: 'Este membro já esta cadastrado!!!',
							type:  'warning'
							});
					}
				// se mens3 igual a 4 - indica que este cadastro foi realizado, e reseta todos os campos do formulario
					if(response.mens3 == '4')resetform_cadastro();

			},
			erro: function(response) {
				//console.log(response);
				alert(response);

				Swal.fire({
				title: 'Erro ao cadastrar, tente novamente!!!',
				type: 'error',
				timer: 5000});
			}
		});

		return false;
		});
/////////////////////////////////////////////////////////////////////////////////////////////////

$('#busca').submit(function(){
	var dados = $(this).serialize();
	event.preventDefault();
	console.log(dados);
	$('#resultado').empty();
	$.ajax({
	type:'POST',
	url: "./_fonts/config/buscaCursos.php",
	dataType: 'json',     // para obter a resposta no formato json e rodar no sweetalert2
	data: dados,
	success:function(response){ //retorna o echo do php
		if(response.length > 0){
		for(var i=0;response.length>i;i++){
			//Adicionando registros retornados na tabela
				$('#resultado').append('<span>'+response[i].curso+' - '+response[i].status+'</span><br>');
			}}
			else{
				$('#resultado').append('<span>Nenhum registro encontrado!!!</span><br>');
			}
			
	},
	erro: function(response) {
		//console.log(response);
		alert(response);

		Swal.fire({
		title: 'Erro ao buscar Informação, tente novamente!!!',
		type: 'error',
		timer: 5000});
	}
});

return false;
});
/////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////
	});

///////////////////////////////////////////////////////////////////////////

function resetform_cadastro(){
	$('#nome').val("");
	$('#cargo').val("");
	$('#tel').val("");
	$('#data').val("");
	$('#email').val("");
	$('#end').val("");
	 //$('#cem').val("");
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
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

/////////////////////////////////////////////////////////////////////////////////////////////////////


$(".perfil_modal").on('click',function() {
		$.ajax({
	 method:'get',		//Definimos o método HTTP usado
	 dataType: 'json',	//Definimos o tipo de retorno
	 cache: false,
	 url: 'http://localhost/www/igreja/_fonts/config/cadastro_perfil.php',//Definindo o arquivo onde serão buscados os dados
	 data: {funcao: 'cadastro'}//variaveis post e seus valores
	}) 
	.done(function(dados){
	
		 for(var i=0;dados.length>i;i++){

			 //Adicionando registros retornados na tabela
				 document.getElementById("nome_cad").value = dados[i].nome;
				 document.getElementById("email_cad").value = dados[i].email;
				 document.getElementById("tel_cad").value = dados[i].telefone;
				 document.getElementById("niver_cad").value = dados[i].nasc;
				 document.getElementById("cem_cad").value = dados[i].supervisao;
				 document.getElementById("endereco_cad").value = dados[i].endereco;
				 
			 }
			 $('#perfilModal').modal('show');
		 })
		 .fail(function(dados){

			 alert("Erro ao carregar os dados: "+ dados.msg);//se tiver alguma falha no acesso ao banco gerar um alert

	 });
 	 

});
///////////////////////////////////////////////////////////////////////////

  function resetform(){
        	$('#nome').val("");
        	$('#am1').val("");
        	$('#am2').val("");
        	$('#cargo').val("");
        	$('#aceitou').val("");
        	$('#tel').val("");
        	$('#tel1').val("");
        	$('#tel2').val("");
        	$('#data').val("");
        	$('.data').val("");
        	$('#email').val("");
        	$('#end').val("");
        	$('#sexo').val("");
        	$('#supervisao').val("");
        //	$('#cem').val("");
        	$('#cem_input').val("");
        	$('#cem_sel').val("");
          //.not('.button,:submit,:reset,:hidden')
          //.val('')
          //.removeAttr('checked')
          //.removeAttr('selected');
      }
/////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////
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
/////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////////
		function Data(evento, objeto){
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
///////////////////////////////////////////////////////////////////////////////////////////q


/////////////////////////////////////////////////////////////////////////////////////////////////////////
function Telefone(evento){
	var keypress=(window.event)?event.keyCode:evento.which;
	console.log(keypress);
	campo = eval (objeto);
	if (campo.value == '(00) 00000-0000'){
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
	if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (15)){
		if (campo.value.length == 1 )
		campo.value = "("+campo.value;
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
/////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////q
		async	function senha(){
				 const {value: password} = await swal({
				
					title: 'Crie uma senha',
					input: 'password',
					inputPlaceholder: 'Digite sua senha aqui!!!',
					showCloseButton: true,
					allowOutsideClick: false,
					inputAttributes: {
						maxlength: 10,
						autocapitalize: 'off',
						autocorrect: 'off'
					}
				})

			
				if (password) {
					$.post( "../../app/membros/cad_DB1.php" , { senha: password })//acesso ao banco declarando as variaveis post e seus valores
					Swal.fire({
						title: 'Cadastro realizado com Sucesso',
						type:  'success',
						timer: 5000});
					//Swal.fire('Entered password: ' + password)
				}					
		}
////////////////////////////////////////////////////////////////////////////////////////
		$('#perfilModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipientnome = button.data('whatevernome')
			var recipientdetalhes = button.data('whateverendereco')
			var recipientdata = button.data('whateverdata')
			var recipientemail = button.data('whateveremail')
			var recipientcargo = button.data('whatevercargo')
			var recipientcem = button.data('whatevercem')
			var recipienttel = button.data('whatevertel')
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.modal-title').text(recipientnome)
			modal.find('#nome_cad').val(recipientnome)
			modal.find('#endereco_cad').val(recipientdetalhes)
			modal.find('#email_cad').val(recipientemail)
			modal.find('#niver_cad').val(recipientdata)
			modal.find('#cargo_cad').val(recipientcargo)
			modal.find('#cem_cad').val(recipientcem)
			modal.find('#tel_cad').val(recipienttel)
			//console.log(recipientdata);
			
			
			});
	
			// INICIO FUNÇÃO DE MASCARA MAIUSCULA
function maiuscula(z){
	v = z.value.toUpperCase();
	z.value = v;
}
//FIM DA FUNÇÃO MASCARA MAIUSCULA


//converter data   esta função usava in file encontrista.js
function converteData(niver){
	return niver.split('-').reverse().join('/');
  }
//fim da conversão de data

function login(){
	swal.fire({
		title: '<h1>Login</h1>',
		type: 'info',
		html:
		'<form>' +
		'<div class="row">' +
		'<div class="col-md-12">' +
		'<p>Please login to continue</p>' +
		'</div>' +
		'</div>' +
		'<div class="row">' +
		'<div class="col-md-12">' +
		'<div class="form-group has-danger">' +
		'<label class="sr-only" for="username">E-Mail Address</label>' +
		'<div class="input-group mb-2 mr-sm-2 mb-sm-0">' +
		'<input type="text" name="username" class="form-control" id="username" placeholder="Username" required autofocus>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'<div class="row">' +
		'<div class="col-md-12">' +
		'<div class="form-group">' +
		'<label class="sr-only" for="password">Password</label>' +
		'<div class="input-group mb-2 mr-sm-2 mb-sm-0">' +
		'<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'<div class="row">' +
		'<div class="col-md-12">' +
		'<button type="submit" class="swal2-styled">Login</button>' +
		'<!--<a class="btn btn-link" href="reset">Forgot Your Password?</a>-->' +
		'</div>' +
		'</div>' +
		'<div class="row mt-5">' +
		'<div class="col-md-12">' +
		'<div class="form-control-feedback" style="display: none;">' +
		'<span class="text-danger align-middle">' +
		'<i class="fa fa-close"></i> Incorrect username or password' +
		'</span>' +
		'</div>' +
		'</div>' +
		'</div>' +
		'</form>',
		showCloseButton: true,
		showConfirmButton: false
	});
}
