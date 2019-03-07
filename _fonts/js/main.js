
  $(document).ready(function(){
			  $('#data').mask('00/00/0000');
			  $('#cep').mask('00000-000');
			  $('.tel').mask('(00) 00000-0000');
			  $('#cpf').mask('000.000.000-00');
			  				 });

       $('.dropdown-submenu > a').on("click", function(e) {
                     var submenu = $(this);
                     $('.dropdown-submenu .dropdown-menu').removeClass('show');
                     submenu.next('.dropdown-menu').addClass('show');
                     e.stopPropagation();
                 });

                 $('.dropdown').on("hidden.bs.dropdown", function() {
                     // hide any open menus when parent closes
                     $('.dropdown-menu.show').removeClass('show');
                 });

/* jQuery(document).ready(function(){
				jQuery('#ajax_form').submit(function(){
					var dados = $(this).serialize();

				 request = $.ajax({
						type:'POST',
						url: "app/membros/cadDB.php",
						dataType: 'html',
						data: dados,})
				 		request.done(function(response){
					 		Swal.fire({
									title: response,
				 	request.done(function(response, textStatus, jqXHR){
				 		Swal.fire({
								  	title: 'Cadastro realizado com sucesso! Sua senha de acesso foi enviada para seu email!',
								type: 'success',
									timer: 5000});
									document.getElementById('ajax_form').reset();

				 		})
						request.fail(function() {
						    Swal.fire({
										  	title: 'Erro ao cadastrar, tente novamente!!!',
											type: 'error',
											timer: 5000});

						})
						request.always(function(){

						})




					return false;
			   	});
			});
*/

jQuery(document).ready(function(){
				jQuery('#formulario_encontrista').submit(function(){
					var dados = $(this).serialize();
				 		$.ajax({
						type:'POST',
						url: "../../app/membros/cad_Encontrista.php",
						dataType: 'html',
						data: dados,
						success:function(response){ //retorna o echo do php
							//alert(response);
				 			Swal.fire({
							title: response.mens1,
							type:  response.mens2,
							timer: 5000});
							document.getElementById('ajax_form').reset();

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

      jQuery(document).ready(function(){

      				jQuery('#ajax_form').submit(function(){
      					var dados = $(this).serialize();
                console.log(dados);
      				 		$.ajax({
      						type:'POST',
      						url: "../../app/membros/cadDB.php",
      						dataType: 'html',
      						data: dados,
      						success:function(response){ //retorna o echo do php
      							//alert(response);
      				 			Swal.fire({
      							title: response.mens1,
      							type:  response.mens2,
      							timer: 5000});
                    if(response.mens3 == "1")document.getElementById('#ajax_form').reset();

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
