
  $(document).ready(function(){
			  $('#data').mask('00/00/0000');
			  $('#cep').mask('00000-000');
			  $('.tel').mask('(00) 00000-0000');
			  $('#cpf').mask('000.000.000-00');
			  				 });
		



 jQuery(document).ready(function(){
				jQuery('#ajax_form').submit(function(){
					var dados = $(this).serialize();
				
				 request = $.ajax({
						type:'POST',
						url: "app/membros/cadDB.php",
						dataType: 'html',
						data: dados,})
				 	request.done(function(response, textStatus, jqXHR){
				 		Swal.fire({
								  	title: 'Cadastro realizado com sucesso!!!',
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

window.addEventListener('unload',function(event){
		
	console.log("fechou");
})