$('#editModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
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
    modal.find('#nome_modal').val(recipientnome)
    modal.find('#endereco_modal').val(recipientdetalhes)
    modal.find('#email_modal').val(recipientemail)
    modal.find('#niver_modal').val(recipientdata)
    modal.find('#cargo_modal').val(recipientcargo)
    modal.find('#cem_modal').val(recipientcem)
    modal.find('#tel_modal').val(recipienttel)
    //console.log(recipientdata);
    
    
    });

// INICIO FUNÇÃO DE MASCARA MAIUSCULA
function maiuscula(z){
    v = z.value.toUpperCase();
    z.value = v;
}
//FIM DA FUNÇÃO MASCARA MAIUSCULA

function tabela(){
    $('#tabela_membros').DataTable( {
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
    }
    )}

 $(document).ready(function() {
       tabela();
    
       /* var updater = setTimeout (function () {
          $('#tabela_encontrista').load ('encontrista.php', 'update=true');
          }, 3000);*/
    
    
    });
    