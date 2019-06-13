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
        ev.target.appendChild(div); //cria uma nova div no elemento pai

        for(var i = 0; i < div.children.length; i++){
          alert(div.children[i].tagName + div.children[i].id )
        }

        //alert( document.getElementById(data).textContent + data.innerHTML());
      //  alert(div.parentElement.id +" - " + div.children[0].id);
        ev.preventDefault();
        var salva = document.getElementById( div.children[0].id).firstChild.nodeValue; 
        var salva1 = document.getElementById( div.children[1].id).firstChild.nodeValue; 
       // var valor = $(salva p).attr('id');
         
        console.log(data+"-"+salva);
        salva_tarefa(div+"-"+data+"-"+salva+salva1);
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

   function carregar_membros(){
  //  alert("ok");
    var retorno;
    $.ajax({
       url:    "equipeDB.php",
       type:   "get",
       dataType: "json",
       data:   { selec: "3" , funcao: "0"}
       })
       .done(function( data ) {
      // success: function( data ){
           retorno = data;    
           var j = '0';
           var ka= '0';
           for(var i=0;data.length>i;i++){
            //Adicionando registros retornados na tabela
             
              console.log(data[i].cem);
               j =  data[i].cem;
              
              if(i==0)
              {
              // $('#tabsCem').append('<li class="nav-item"><a class="nav-link" id="tab'+i+'" data-toggle="tabajax" href="#tab'+i+'" role="tab" aria-controls="'+j+'" aria-selected="true">'+j+'</a></li>');
               $('#tabsCem').append('<li class="nav-item" role="presentation" class="active" ><a class="nav-link active" data-toggle="tab" href="#tab_'+i+'">'+j+'</a></li>');
              //$('#myTabContent').append('<div class="tab-pane active" id=tab'+i+'" role="tabpanel" aria-labelledby="tab'+i+'">'+j+'</div>');
               $('#myTabContent').append('<div role="tabpanel" class="tab-pane fade in active show" id="tab_'+i+'"><div id="member'+i+'"></div></div>');
                member(j, i);
               
                                  
              }
              else{
                $('#tabsCem').append('<li class="nav-item" role="presentation" class="active"><a class="nav-link" data-toggle="tab" href="#tab_'+i+'">'+j+'</a></li>');
                $('#myTabContent').append('<div role="tabpanel" class="tab-pane fade in" id="tab_'+i+'"><div id="member'+i+'"></div></div>');
                member(j, i);
               //$('#tabsCem').append('<li class="nav-item"><a class="nav-link" id="tab'+i+'" data-toggle="tabajax" href="#tab'+i+'" role="tab" aria-controls="'+j+'" aria-selected="false">'+j+'</a></li>');
               //$('#myTabContent').append('<div class="tab-pane" id=tab'+i+'" role="tabpanel" aria-labelledby="tab'+i+'">'+j+'</div>');
              }
            }
                    
       });
       return retorno;
}

function member(memb, posicao){

  var cem = memb.trim();
  console.log(cem);
  $.getJSON( "./equipeDB.php", { selec: '4' , funcao: memb, },function( json ) {
    for(var i=0;json.length>i;i++){
      $('#member'+posicao).append('<div id="'+cem+[i]+' "draggable="true" ondragstart="drag(event)" class="text-letf bg-transparent">'+
      '<span id="'+cem+'_'+[i]+'">'+json[i].nome+'</span><span id="teste">'+json[i].id+'</span></div>');  
   
    }
   });
}


    $(function(){
      $('#myTabContent').contextMenu({
          selector: 'div', 
          callback: function(key, options) {
            //  var m = "clicked: " + key + " on " + $(this).text();
              var m = key;
             
             var tableData = $(this).children("td").map(function(){  
                return $(this).text();
              }).get();
              
              nome = $.trim(tableData[1]);
              cem = $.trim(tableData[3]);
              linha = $.trim(tableData[0]);
              
              if(m == "delete"){
                     mouse(nome,cem, linha);
                            
              }
              else if(m == "quit") ;
                         
              
             
              //window.console && console.log(m) || alert(nome); 
          },
          items: {
           //   "edit": {name: "Edit", icon: "edit"},
           //   "cut": {name: "Cut", icon: "cut"},
           //   "copy": {name: "Copy", icon: "copy"},
           //   "paste": {name: "Paste", icon: "paste"},
              "delete": {name: "Delete", icon: "delete"},
           //   "sep1": "---------",
              "quit": {name: "Quit", icon: function($element, key, item){ return 'context-menu-icon context-menu-icon-quit'; }}
          }
      });
  });

  function carregar_equipe(){
    //  alert("ok");
      var retorno;
      $.ajax({
         url:    "equipeDB.php",
         type:   "get",
         dataType: "json",
         data:   { selec: "1" , funcao: "0"}
         })
         .done(function( data ) {
        // success: function( data ){
             retorno = data;    
             var j = '0';
             var ka= '0';
             for(var i=0;data.length>i;i++){
              //Adicionando registros retornados na tabela
               
                console.log(data[i].equipe);
                 j =  data[i].equipe;
               
                 $('#equipe_cadastrada').append('<div id="eq_cad'+[i]+' "draggable="true" ondragstart="drag(event)" class="text-letf bg-transparent">'+
                 '<span id="equipe_cad'+[i]+'">'+data[i].equipe+'</span><span hidden>'+data[i].id+'</span></div>');  
                 
              }
                      
         });
         return retorno;
  }