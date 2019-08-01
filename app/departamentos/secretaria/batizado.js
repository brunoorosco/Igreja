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
 $(document).ready(function() {
            document.getElementById("msg_bat").style.display = 'none';    
            //$('#msg_bat').hide(); 
            // Chamo o Auto complete do JQuery ui setando o id do input, array com os dados e o mínimo de caracteres para disparar o AutoComplete
          //função preencher campos
                $("input[name='nome']").blur(function(){

                   // var $cem = $("input[name='cem_bat']");
                    var $cem = $("#cem_bat");
                    var $niver = $("input[name='niver']");
                    $.getJSON('function.php',{
                        nome: $(this).val()
                        },function(json){
                            var items = [];
                            var items2 = [];
                            for(var i in json) {            
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
           
            $('#form2').submit(function(){
              
                var dados = $(this).serialize()+'&selec=10&funcao=0&fulano=0';
                //console.log( dados);
               // alert(JSON.stringify({selec: "10" , funcao: "0", fulano:"0", dados}));
                event.preventDefault();
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
            });
    
            return false;
            });
    /////////////////////////////////////////////////////////////////////////////////////////////////
        
        });

 $('#editModal').on('hidden.bs.modal', function(e){
      $(this).find('#form2')[0].reset();                        
        });
        
    
 $("#editModal").on('shown.bs.modal', function() {
          //  console.log('Abriu a light box');
                    // funções que deseja
                    $('#cem_bat').autocomplete({ source: 'retornaCEM.php'});
            
                    $('#name_bat').autocomplete({ source: 'retornaMembro.php',  minLength: 3});
                  
                    });

                    //converter data
function convData(dados){
        return dados.split('-').reverse().join('/');
  }
//fim da conversão de data
            
function reverseArr(input) {
    var ret = new Array;
    for(var i = input.length-1; i >= 0; i--) {
        ret.push(input[i]);
        
    }
    return ret;
}