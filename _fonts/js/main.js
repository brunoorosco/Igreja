
  $(document).ready(function(){
			  $('#data').mask('00/00/0000');
			  $('#cep').mask('00000-000');
			  $('.tel').mask('(00) 00000-0000');
			  $('#cpf').mask('000.000.000-00');
			  				 });
		

/* jQuery(document).ready(function(){
				jQuery('#ajax_form').submit(function(){
					var dados = $(this).serialize();
				
				 request = $.ajax({
						type:'POST',
						url: "app/membros/cadDB.php",
						dataType: 'html',
						data: dados,})
<<<<<<< HEAD
				 		request.done(function(response){
					 		Swal.fire({				  
									title: response,
=======
				 	request.done(function(response, textStatus, jqXHR){
				 		Swal.fire({
								  	title: 'Cadastro realizado com sucesso! Sua senha de acesso foi enviada para seu email!',
>>>>>>> 5f134011f0305e7ceb45fc915da7110bea832507
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
				jQuery('#ajax_form').submit(function(){
					var dados = $(this).serialize();
				
				 		$.ajax({
						type:'POST',
						url: "app/membros/cadDB.php",
						dataType: 'json',
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
