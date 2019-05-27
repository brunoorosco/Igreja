function carrega_equipe(){
    var retorno;
    $.ajax({
       url:    "equipeDB.php",
       type:   "get",
       dataType: "json",
       data:   { selec: "2" , funcao: "0"},
       async: false})
       .done(function( data ) {
      // success: function( data ){
           retorno = data;    
           var j = '0';
           var ka= '0';
           for(var i=0;data.length>i;i++){
            //Adicionando registros retornados na tabela
             
              console.log(data[i].tarefa+" - "+data[i].equipe);
                
            // $('<div>', { id: "equipe"+[i], class: 'text-left', draggable="true" ondragstart="drag(event)"}).appendTo();
                 //  document.getElementById("equipe"+[i]).innerHTML = "<h2><span>" + data[i].equipe +"</span></h2>"; 
                 if(data[i].tarefa == '0' ){
                        $('#equipe').append('<div id="equipe'+[i]+'"draggable="true" ondragstart="drag(event)" class="text-letf bg-transparent texto_p">'+
                        '<span id="equipe_p'+[i]+'">'+data[i].equipe+'</span><span hidden>'+data[i].tarefa+'</span></div>');  }

                        else if(data[i].tarefa == '1' ) {
                            $('#cozinha').append('<div id="equipe'+[i]+'"draggable="true" ondragstart="drag(event)" class="text-letf bg-transparent texto_p">'+
                               '<span id="equipe_p'+[i]+'">'+data[i].equipe+'</span><span>'+data[i].tarefa+'</span></div>');  }
                        
                               else if(data[i].tarefa == '2' ) {
                                $('#cozinha').append('<div id="equipe'+[i]+'"draggable="true" ondragstart="drag(event)" class="text-letf bg-transparent texto_p">'+
                                      '<span id="equipe_p'+[i]+'">'+data[i].equipe+'</span><span>'+data[i].tarefa+'</span></div>');  }
    
                  }
                              
       });
     
         
       return retorno;
   }