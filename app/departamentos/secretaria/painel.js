function verificaChecks() {
    var aChk = document.getElementsByName("item");
    var bot;
    for (var i=0;i<aChk.length;i++){
        if (aChk[0].checked == true){
       // CheckBox Marcado... Faça alguma coisa... Ex:
      bot = 's';
    //   console.log("marcado.");

    }  else {
      bot = 'n';
     // console.log("não marcado.");// CheckBox Não Marcado... Faça alguma outra coisa...
    }       
}
controle("todos_membros", bot);
}

//função escrever no banco
function controle(nome_funcao, valor){	
$.get( "config_DB.php", { funcao: nome_funcao, status: valor } );
}

   
function ler_banco(nome_funcao){
        var retorno;
        $.ajax({
           url:    "./ler_DB_funcao.php",
           type:   "get",
           dataType: "json",
           data:   { funcao: nome_funcao },
           async: false})
           .done(function( data ) {
          // success: function( data ){
               retorno = data;           
           });
       
           return retorno;
       }


$(document).ready(function() {

       var  funcao =  ler_banco("filtro_membros");
        var slider = $("#slider_filtro");
     
        slider.on("input change", function(e) {
          var total =  $(this).val();
          $("#priceValue").html(total);
          
          controle("filtro_membros", total);
    
        })
     
          $('#tabela_disciplina').DataTable( {
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
            )
     
     
    });


function atualiza(funcao){       
var labels = [];

        var leitura = ler_banco(funcao);  //faz a leitura do mes de forma distinta 
        console.log(leitura);
        for(var i in leitura) {      
          labels.push(leitura[i].funcao);
         
                       }
                var total =  $("#slider_filtro").val(labels);
                $("#priceValue").html(labels);

            }

