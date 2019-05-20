$(document).ready(function() {
    var table = $('#tabela_encontrista').DataTable( {
         
              
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

  jQuery('#formulario_encontrista').submit(function(){
    var dados = $(this).serialize();
      $.ajax({
      type:'POST',
      url: "./cad_DB_Encontrista.php",
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

function mouse(encontrista, cem){
      Swal.fire({
        title: 'Você deseja excluir?',
        text: "Você não poderá reverter isso!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, excluir!'
      }).then((result) => {
        if (result.value) {
          //função get para delete
          $.ajax({
            timeout: 3000,
            type:'get',		//Definimos o método HTTP usado
            dataType: 'json',	//Definimos o tipo de retorno
            url: './delete_encontrista.php',//Definindo o arquivo onde serão buscados os dados
            data:  {name: encontrista, cem:cem},//variaveis post e seus valores
            success: function(dados){
          
          Swal.fire(
            'Deletado!',
            'O encontrista '+dados+' foi deletado com sucesso.',
            'success'
              )
          }
        })
      }
    })
        
        return false;
    }


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


/////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////