function cem(){
    var retorno;
    $.ajax({
       url:    "cemDB.php",
       type:   "get",
       dataType: "json",
       data:   { funcao: "10" , arg1: "0", arg2: "0"},
       async: false})
       .done(function( data ) {
      // success: function( data ){
           retorno = data;    
           var j = '0';
           var ka= '0';
           for(var i=0;data.length>i;i++){
            //Adicionando registros retornados na tabela
             
              console.log(i+" - "+data[i].nome);
                
             // $('<div>', { id: data[i].supervisao, class: 'counter col border min-height-100'}).appendTo('#membros'+[ka]);
                  // document.getElementById('membrosCEM').innerHTML = "<h2 class='count-title'>" + data[i].quant_membros +"</h2>"+ "\n" +"<p class='count-text'>"+ data[i].supervisao+"</p>";
                   var teste = document.getElementById('membrosCEM').innerHTML += "<div style=' width: 300px;' class='text-left color-black'id='membro" +i+ "'>"+ data[i].nome+"</div>";     
                  
            
                  }
                              
       });
     
         
       return retorno;
   }
   
function encontrista(){
    var retorno;
    $.ajax({
       url:    "cemDB.php",
       type:   "get",
       dataType: "json",
       data:   { funcao: "11" , arg1: "0", arg2: "0"},
       async: false})
       .done(function( data ) {
      // success: function( data ){
           retorno = data;    
           var j = '0';
           var ka= '0';
           for(var i=0;data.length>i;i++){
            //Adicionando registros retornados na tabela
             
              //console.log(data[i].supervisao+" - "+data[i].quant_encontrista);
                
              $('<div>', { id: data[i].supervisao+"_enc", class: 'counter col border min-height-100'}).appendTo('#encontrista'+[ka]);
                   document.getElementById(data[i].supervisao+"_enc").innerHTML = "<h2 class='count-title'>" + data[i].quant_encontrista +"</h2>"+ "\n" +"<p class='count-text'>"+ data[i].supervisao+"</p>";
                   if(++j >= '4')
                   {   j='0';
                       ka++;
                       
                   }
                 
            
                  }
                              
       });
     
         
       return retorno;
   }
   