function allowDrop(ev)
    {
        ev.preventDefault();
    }
  
function drag(ev)
    {
        ev.dataTransfer.setData("Text",ev.target.id);
    }
  
function drop(ev)
    {
        var data = ev.dataTransfer.getData("Text");
        var div =  document.getElementById(data);
        ev.target.appendChild(div);
        //alert( document.getElementById(data).textContent + data.innerHTML());
      //  alert(div.parentElement.id +" - " + div.children[0].id);
        

        ev.preventDefault();
        var salva = document.getElementById( div.children[0].id).firstChild.nodeValue; 
       // var valor = $(salva p).attr('id');
         
         console.log(salva);
        salva_tarefa(salva);
    }

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
               j =  data[i].tarefa;
               $('#tarefa'+j).append('<div id="equipe'+[i]+'"draggable="true" ondragstart="drag(event)" class="text-letf bg-transparent texto_p">'+
               '<span id="equipe_p'+[i]+'">'+data[i].equipe+'</span><span hidden>'+data[i].tarefa+'</span></div>'); 
            // $('<div>', { id: "equipe"+[i], class: 'text-left', draggable="true" ondragstart="drag(event)"}).appendTo();
                 //  document.getElementById("equipe"+[i]).innerHTML = "<h2><span>" + data[i].equipe +"</span></h2>"; 
                 
                  }
                              
       });
     
         
       return retorno;
   }
   
   function salva_tarefa(tarefa)
   {
    alert(tarefa);

   }