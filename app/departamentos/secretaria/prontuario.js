var edit = 0;

$(document).ready(function() {

   listar_usuario(0); //Chamar a função para listar os registros
   $('#offer-edit-button').click(EditMode);

    $("#userUncao").mask("99/99/9999"); 
    $('#user').autocomplete({ source: 'retornaMembro.php',  minLength: 3});
/*
    var ka=0, j=0;   
    for(var i=1; 21>i ;i++){
          $('<div>', { id: "course_"+[ka], class: 'form-row'}).appendTo('#fichas');    
          $('<div>', { id: "course"+[i], class: 'col',}).appendTo('#course_'+[ka]);
          $('<div>', { id: [i]+"curso", class: 'input-group mb-3 input-group-sm form-inline'}).appendTo('#course'+[i]);
          $('<div>', { id: [i]+"curso_", class: 'input-group-prepend'}).appendTo('#'+[i]+'curso');
            
          document.getElementById([i]+"curso_").innerHTML = '<span class="input-group-text">Curso '+[i]+'</span>';  
          $('<input>', { name:'curso'+[i] ,class: 'form-control'}).appendTo('#'+[i]+'curso');  
               if(++j >= '4')
               {   
                   j='0';
                   ka++;                   
               }             
              }*/
         
             $("#btn_consulta").click(function(){
                usuario = $("#user").val();
                if(usuario == null || usuario == "" ){
                  document.getElementById("user").focus();
                  //alert("necessario preencher");
                  $("#tabela_disciplina td").remove();                                
                  return false;
                }else    listar_usuario(usuario);
             });
             
            /*  $("input[name='user']").blur(function(){
                 
               // var $cem = $("input[name='cem_bat']");
                $.getJSON('function.php',{
                    nome: $(this).val()
                    },function(json){
                        var items = [];
                        var items2 = [];
                        for(var i in json) {            
                            items.push(json[i].supervisao);
                            items2.push(json[i].nasc); 
                                  }
                       
                    });
            });*/
         
              


            //  $('<input>', { id: [i]+"curso_", class: 'form-control', name: 'curso'+[i]}).appendTo('#'+[i]+'curso_');

/*
              <div class="col"> ok
              <div class="input-group mb-3 input-group-sm form-inline"> ok
                  <div class="input-group-prepend"><span class="input-group-text">Curso 9</span></div>ok
                  <input type="text" class="form-control">
              </div> 
          </div>   */
         
          
         


   
    $('#prontuario').submit(function(){
      
        
        var dados = $(this).serialize();
        console.log( dados);
        console.log("chegou");
       // alert(JSON.stringify({selec: "10" , funcao: "0", fulano:"0", dados}));
        event.preventDefault();
     /*   $.ajax({
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
*/
    return false;
    });
/////////////////////////////////////////////////////////////////////////////////////////////////

});


//////////////////////////////////////////////////////////////////
/////-----FUNÇÃO PARA EDIÇÃO EM TABELA--------//////
function EditMode()
{
  if (!edit) {
   //TableEdit(); 
   $('.editable').attr('contenteditable', 'true');
   HtmlEdit(); edit=1;
   $('.mybutton').css({"background": "#007acc", "color": "#FFF"});
   $('.mybutton').html('Save');
   $('.mybutton').css("border", "1px solid #007acc");
   $('.tabela_disciplina').css("border", "2px solid #007acc");
   
  }
  else {
   $('.editable').unbind('click'); edit = 0 ;
   $('.mybutton').css({"background": "#fff", "color": "#000"});
   $('.tabela_disciplina').css("border", "1px solid #d1d1d1");
   $('.mybutton').html('Edit');
   $('.mybutton').css("border", "1px solid #d1d1d1");
   $('.editable').attr('contenteditable', 'false');
  }
}

function HtmlEdit()
{
  $('.editable').click(function ()
  {
    
    $(this).keydown(function(){
          if(event.keyCode==13)
             {
             return false;
              
             }
    })	

    $(this).keyup(function(){
          if(event.keyCode==13)
             {
             $('.editable').blur();
              
             }
    })	
              
    $(this).off('blur');
    $(this).blur(function() { alert('it works here'); 
     
        var data = [];
        $.ajax({
        type: "POST",
        data: {"data": data},        
        url: "inc/save-offer.php",
        success: function (anwser)
        {
           $('#aw-wrapper').html(anwser);
              
        }
   
    });


    })

    
  })
}
        


$("#ch1").on('change', function() {
   checkar("#ch1");  
})
$("#ch2").on('change', function() {
   checkar("#ch2");  
})
$("#ch3").on('change', function() {
   checkar("#ch3");  
})
$("#ch4").on('change', function() {
   checkar("#ch4");  
})
$("#ch5").on('change', function() {
   checkar("#ch5");  
})
$("#ch6").on('change', function() {
   checkar("#ch6");  
})
$("#ch7").on('change', function() {
   checkar("#ch7");  
})
$("#ch8").on('change', function() {
   checkar("#ch8");  
})


function checkar(radio){
    var status;
    if ($(radio).is(':checked')) {
        $(radio).attr('value', 'sim');
        status = $(radio).val();
      } else {
        status = $(radio).attr('value', 'não');
        status = $(radio).val();
      }
      console.log(status)

    return
}

function listar_usuario(user){
   var dados = {
      user: user
         }
   $.post('./consulta.php', dados , function(retorna){
      //Subtitui o valor no seletor id="conteudo"
      $("#tabela").html(retorna);
      paginas();
   });
}

function paginas(){
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
       })
     }
     