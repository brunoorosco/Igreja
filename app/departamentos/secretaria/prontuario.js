$(document).ready(function() {
   
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
