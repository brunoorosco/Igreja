$('#ModalBatizando').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Batismo')
    modal.find('#id_batizado').val(recipient)
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
    modal.find('.modal-title').text('Batismo: ' + recipient)
    modal.find('#id-batizado').val(recipient)
    modal.find('#recipient-name').val(recipientnome)
    modal.find('#detalhes').val(recipientdetalhes)
    modal.find('#dataCurso').val(recipientdata)
    //console.log(recipientdata);
    
    });

    //////////////////////////////////////////////////////////////////// 

window.onload = function() {
    //carrega_dados();
    };
    
    function carrega_dados(batismo)
    {
        ler_dados(batismo);
    }
    
///************ função pra ler dados da turma ***************** */
   function ler_dados(batismo){
		$(document).ready(function(){
			$('#part').empty(); //Limpando a tabela
			$.ajax({
				timeout: 3000,
				type:'post',		//Definimos o método HTTP usado
				dataType: 'json',	//Definimos o tipo de retorno
				url: 'batDB.php',//Definindo o arquivo onde serão buscados os dados
				data:  {funcao: batismo},//variaveis post e seus valores
				success: function(dados){
					for(var i=0;dados.length>i;i++){
                        //Adicionando registros retornados na tabela
                       
							$('#part').append('<p id="batizando'+[i]+'">'+dados[i].nome+' - '+dados[i].nome_cem+'</p>');
						}
					},
					error: function(dados){

						alert("Erro ao enviar dados"+dados.msg);//se tiver alguma falha no acesso ao banco gerar um alert

				}
				});
			});
        }
 //////////////////////////////////////////////////////////////////// 