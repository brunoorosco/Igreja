//////////////////////////////////////////////////////////////////// 
$('#editModal').on('show.bs.modal', function (event) {
                  
                     // funções que deseja
                    $(this).find('#form2')[0].reset();                        
                    $('#cem_bat').autocomplete({ source: 'retornaCEM.php'});       
                    $('#name_bat').autocomplete({ source: 'retornaMembro.php',  minLength: 3});

                       
   
              /*      var button = $(event.relatedTarget) // Button that triggered the modal
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
                    //console.log(recipientdata);*/
    
    });
//////////////////////////////////////////////////////////////////// 

//////////////////////////////////////////////////////////////////// 
function cadBat(){
      
    swal.fire({
        title: 'Novo Batismo',
        html:
            '<form id="form_batizado" method="GET" action="./processa.php" enctype="multipart/form-data">'+
              '<div class="form-group input-group">'+
                '<div class="form-group col">'+
                    '<label for="message-text" class="control-label">Data Batismo:</label>'+
                    '<input name="dataBat" type="text" class="form-control col data" id="dataBat" placeholder="00/00/0000" maxlength="10">'+
                '</div>'+	
               
                '<div class="form-group col">'+
                    '<label for="cem" class="control-label">Horário do Batismo:</label>'+
                    '<input name="horaBat" class="form-control" id="horaBat" Type="text" placeholder="HH:MM" maxlength="5">'+
                '</div>'+
            '</div>'+
        '</form>',
        showCancelButton: true,
        confirmButtonText: 'Salvar',
        showLoaderOnConfirm: true,
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-primary btn-lg',
        cancelButtonClass: 'btn btn-lg',
        onOpen: function () {
            $("#dataBat").mask("99/99/9999"); 
            $("#horaBat").mask("99:99");
    },
        preConfirm: function () {
            return new Promise((resolve, reject) => {
        
                    resolve({
                       // Password: $('input[placeholder="Password"]').val()
                    });
        
        
                });
        },
        allowOutsideClick: false
        }).then(function (result) {
            var dados = $('#form_batizado').serialize();
              $.ajax({
                type:'GET',
                data:{dados},
                url:'data.php',
                success:function(data) {
                    alert(data);
                }
            });
         }).catch(swal.noop)
    }
//////////////////////////////////////////////////////////////////// 

//////////////////////////////////////////////////////////////////// 
function certificado() {

    swal.fire({
        title: 'Impressão de Certificados',
        html:
            '<form id="form_certificado" method="GET" action="" enctype="multipart/form-data">' +
                '<div class="form-group input-group">' +
                    '<div class="form-group col-4 text-left">' +
                        '<label for="message-text" class="control-label ">Data:</label>' +
                        '<input name="data1" type="text" class="form-control col data" id="dataBat" placeholder="00/00/0000" maxlength="10">' +
                    '</div>' +
                    '<div class="form-group col text-left">' +
                        '<label for="cem" class="control-label text-left">Nome do Batizando:</label>' +
                        '<input name="nome1" class="form-control" id="horaBat" Type="text">' +
                    '</div>' +
                '</div>' +
                '<div class="form-group input-group">' +
                    '<div class="form-group col-4">' +
                        '<input name="data2" type="text" class="form-control col data" id="dataBat" placeholder="00/00/0000" maxlength="10">' +
                    '</div>' +
                    '<div class="form-group col">' +
                        '<input name="nome2" class="form-control" id="horaBat" Type="text">' +
                    '</div>' +
                '</div>' +
            '</form>',
        showCancelButton: true,
        showCloseButton: true,
        confirmButtonText: 'Imprimir',
        showLoaderOnConfirm: true,
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-primary btn-lg',
        cancelButtonClass: 'btn btn-lg',
        onOpen: function () {
            $("#dataBat").mask("99/99/9999");
       },
        preConfirm: function () {
            return new Promise((resolve, reject) => {

                resolve({
                    // Password: $('input[placeholder="Password"]').val()
                });


            });
        },
        allowOutsideClick: false
    }).then((result) => {
            if (result.value) {
               // alert(result.value);
                var dados = $('#form_certificado').serialize();
                window.location.replace('./printBatismo.php?' + dados);
                $("#alert_template button").after('<span>Impressão realizada com <strong>Sucesso!!!</strong></span>');
                $('#alert_template').fadeIn('slow');
               }
    }).catch(swal.noop)
}
////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////// 
$('#myModal').on('hidden.bs.modal', function (e) {
    // do something...
    var elemento = document.getElementById("principal");
        while (elemento.firstChild) {
        elemento.removeChild(elemento.firstChild);
}
  })

//////////////////////////////////////////////////////////////////// 
$('#myModal').on('show.bs.modal', function (event) {
    // funções que deseja
   
   var button = $(event.relatedTarget) // Button that triggered the modal
   var recipient = button.data('whatever') // Extract info from data-* attributes
  
   $.ajax({
    url:    "equipeDB.php",
    type:   "get",
    dataType: "json",
    data:   { selec: "12" , mes: "0", funcao: recipient, fulano:"0"},
    async: false })
    .done(function( retorno ) {
        var j = '0';
        var ka= '0';

        for(var i=0;retorno.length>i;i++){
         //Adicionando registros retornados na tabela
       //  console.log(retorno[i].cem+" - "+retorno[i].quant_bat);
      //   console.log(i);
      //   $('<div>', { id: [i]+"_bat_" }).appendTo('#batismo0');
       //       document.getElementById([i]+"_bat_").innerHTML = "<p class='count-text'>" + retorno[i].quant_bat +" - "+ retorno[i].cem+"</p>" ;
           $('<div>', { id: "batismo"+[ka], class: 'row text-center',style:'margin-left: 5px;margin-right:5px'}).appendTo('#principal');
           $('<div>', { id: [i]+"_bat_"+[ka], class: ' counter col min-height-100 '}).appendTo('#batismo'+[ka]);
                document.getElementById([i]+"_bat_"+[ka]).innerHTML = "<h2 class='count-title'>" + retorno[i].quant_bat +"</h2>"+ "\n" +"<p class='count-text'>"+ retorno[i].cem+"</p>";
                if(++j >= '4')
                {   
                    j='0';
                    ka++;
                    console.log(ka+"ka");
                    console.log(i+"i");
                    
                }             
               }              
    });
   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    j = '0';
    ka='0';

   var modal = $(this);
   modal.find('.modal-title').text('Batismo: ' + recipient);
   modal.find('#id-batizado').val(recipient);
  
   //console.log(recipientdata);

});    
    
//////////////////////////////////////////////////////////////////// 
     
    
    
//////////////////////////////////////////////////////////////////// 
window.onload = function() {
   mascara();
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