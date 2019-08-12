$(document).ready(function() {

    $("#userUncao").mask("99/99/9999"); 
    $('#user').autocomplete({ source: 'retornaMembro.php',  minLength: 3});

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
              }
        
              


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
