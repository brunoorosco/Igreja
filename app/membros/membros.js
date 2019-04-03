$('#editModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var recipientnome = button.data('whatevernome')
    var recipientdetalhes = button.data('whateverendereco')
    var recipientdata = button.data('whateverdata')
    var recipientemail = button.data('whateveremail')
    var recipientcargo = button.data('whatevercargo')
    var recipientcem = button.data('whatevercem')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text(recipientnome)
    modal.find('#nome').val(recipient)
    modal.find('#recipient-name').val(recipientnome)
    modal.find('#endereco').val(recipientdetalhes)
    modal.find('#email').val(recipientemail)
    modal.find('#niver').val(recipientdata)
    modal.find('#cargo').val(recipientcargo)
    modal.find('#cem').val(recipientcem)
    //console.log(recipientdata);
    
    });