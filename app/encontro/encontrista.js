$(document).ready(function() {
    $('#tabela_encontrista').DataTable( {
            "language": {
            "lengthMenu": "Mostrar _MENU_ itens por página",
            "zeroRecords": "Nenhum Item Encontrado",
            "info": "",
            "infoEmpty": "",
            "infoFiltered": "",
            "search": "Procurar:",
            "paginate": {
                "previous": "Anterior",
                "next": "Próximo"
              }
    }
  });

});




$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var recipientnome = button.data('whatevernome')
    var recipientdetalhes = button.data('whateverdetalhes')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('ID'+recipient)
    modal.find('#id-curso').val(recipient)
    modal.find('#recipient-name').val(recipientnome)
    modal.find('#detalhes').val(recipientdetalhes)

  });

  
  $(".rows").on('click',function() {
     var horario;
     var tableData = $(this).children("td").map(function(){  
       return $(this).text();
     }).get();
    
     nome = $.trim(tableData[1]);
     console.log(nome);

     $.ajax({
      timeout: 3000,
      type:'get',		//Definimos o método HTTP usado
      dataType: 'json',	//Definimos o tipo de retorno
      url: './funcao_encontro.php',//Definindo o arquivo onde serão buscados os dados
      data:  {name: nome},//variaveis post e seus valores
      success: function(dados){
        for(var i=0;dados.length>i;i++){
          //Adicionando registros retornados na tabela
            $('#Modal-info div#obs').text('Observações: '+dados[i].observacao);
            $('#Modal-info div#nome').text(dados[i].nomeEnc);
            $('#Modal-info div#cem').text('CEM: '+dados[i].CEM);
            $('#Modal-info div#tel').text('Telefone: '+dados[i].telEnc);
            $('#Modal-info div#endereco').text('Endereço: '+dados[i].endEnc);
            data = converteData(dados[i].nascEnc)
            $('#Modal-info div#niver').text('Aniversário: '+data);
          }
        },
        error: function(dados){

          alert("Erro ao carregar os dados"+dados.msg);//se tiver alguma falha no acesso ao banco gerar um alert

      }
      });
    
        
     $('#Modal-info').modal('show');
});

$('.btn-salvar').on('click',function(){
  alert('Salvo');
   $('#Modal-info').modal('hide');
});

function converteData(niver){
  return niver.split('-').reverse().join('/');
}