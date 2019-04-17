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
$(document).ready(function(){
			  $('#data').mask('00/00/0000');
			  $('.data').mask('00/00/0000');
			  $('#cep').mask('00000-000');
			  $('.tel').mask('(00) 00000-0000');
			  $('#cpf').mask('000.000.000-00');
          });
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
jQuery(document).ready(function(){
				jQuery('#formulario_encontrista').submit(function(){
					var dados = $(this).serialize();
				 		$.ajax({
						type:'POST',
						url: "../../app/encontro/cad_DB_Encontrista.php",
						dataType: 'json',
						data: dados,
						success:function(response){ //retorna o echo do php

              //alert(response);
				 			Swal.fire({
							title: response.mens1,
							type:  response.mens2,
							timer: 5000});
              if(response.mens3 == '1')resetform();
							//document.getElementById('#formulario_encontrista').reset();

				 		},
						erro: function(response) {
              Swal.fire({
						  title: 'Erro ao cadastrar, tente novamente!!!',
							type: 'error',
							timer: 5000});
						}
					});

					return false;
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
          //.not('.button,:submit,:reset,:hidden')
          //.val('')
          //.removeAttr('checked')
          //.removeAttr('selected');
      }
/////////////////////////////////////////////////////////////////////////////////////////////////////////

      $(document).ready(function(){
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
									console.log(cargo);	
									console.log(response);
										if(response.mens1 == '1' && (cargo == 'Bispo') || (cargo == 'Pastor') || (cargo == 'Supervisor')  )senha();/*
                  	Swal.fire({
      							title: response.mens1,
      							type:  response.mens2,
										timer: 5000});*/
										
										// se mens3 igual a 2 - indica que este cadastro já existe, possibilitando a edição do mesmo
											if(response.mens3 == '2'){
												Swal.fire({
													title: 'Este membro já esta cadastrado!!!',
													type:  'warning'
													});
											}
										// se mens3 igual a 4 - indica que este cadastro foi realizado, e reseta todos os campos do formulario
											if(response.mens3 == '4')resetform();

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
      			});
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

	