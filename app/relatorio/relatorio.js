  function somarValores(quant){
    var soma = 0;
    var teste = [];
    //   console.log(quant);
    for (var i=0; i<quant.length; i++){

            teste[i] = parseInt(quant[i]);      
            soma += parseInt(teste[i]);
      //      console.log(quant[i]) ;
          }  
      return soma;
    }


  function relatorio_banco(funcao)
  {
    var func = [];
    var n_pessoas = [];
   
      
    $.ajax({
      url: "./relatorioDB.php?selec=2&funcao="+funcao,
      method: "GET",
      dataType: "json",
      success: function(data) {

        //console.log(data);

        for(var i in data) {
          func.push(data[i].funcao);
          n_pessoas.push(data[i].quant);
        }
          func = "aceitou";
          n_pessoas = "10";

         var texto = {funcao: func ,quantidade: n_pessoas};
         var texto_json = JSON.stringify(texto);
         //console.log(texto_json);

         var obj = new Object();
          obj.funcao = func;
          obj.quant  = n_pessoas;
        var jsonString= JSON.stringify(obj);

       
          return jsonString;

       },
      error: function(data) {
        //console.log(data);
      }
    });


  }

  ///************ função pra remover aluno a turma ***************** */
  function loadData(valor, funcao, response) {			
      var provisorio = "teste";
						//verifica se valores estão chegando corretamente 
				//console.log({ nome: valor , curso: idcurso });
			$.get( "relatorioDB.php" , { selec: valor , funcao: funcao })//acesso ao banco declarando as variaveis post e seus valores
					.done(function ( data ) {
            response(data);
            //console.log( "Mensagem: " + data );
          });
          
			}
 //////////////////////////////////////////////////////////////////// 

  var request = $.ajax({
    //
    // A propriedade `url` é local, arquivo, script, alvo de sua requisição.
    //
    url: "./relatorioDB.php",
    //
    // A propriedade `type` é o verbo HTTP (GET, POST, HEAD, etc...)
    //
    type: "GET",
    //
    // A propriedade `data` são os dados de sua aplicação.
    //
    data: "selec=3&funcao=aceitou",
    //
    // A propriedade `dataType` refere-se ao tipo de dado que o servidor deve retornar a requisição.
    //
    dataType: "html"
});




function VerBanco( str, valor, month ){
 var retorno;
 $.ajax({
    url:    "relatorioDB.php",
    type:   "get",
    dataType: "json",
    data:   { selec: valor , funcao: str, mes: month },
    async: false})
    .done(function( data ) {
   // success: function( data ){
        retorno = data;           
    });

    return retorno;
}





function grafico()
{
  Chart.pluginService.register({
    beforeDraw: function (chart) {
      if (chart.config.options.elements.center) {
        //Get ctx from string
        var ctx = chart.chart.ctx;
        
        //Get options from the center object in options
        var centerConfig = chart.config.options.elements.center;
        var fontStyle = centerConfig.fontStyle || 'Arial';
        var txt = centerConfig.text;
        var color = centerConfig.color || '#000';
        var sidePadding = centerConfig.sidePadding || 20;
        var sidePaddingCalculated = (sidePadding/100) * (chart.innerRadius * 2)
        //Start with a base font of 30px
        ctx.font = "30px " + fontStyle;
        
        //Get the width of the string and also the width of the element minus 10 to give it 5px side padding
        var stringWidth = ctx.measureText(txt).width;
        var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;
  
        // Find out how much the font can grow in width.
        var widthRatio = elementWidth / stringWidth;
        var newFontSize = Math.floor(30 * widthRatio);
        var elementHeight = (chart.innerRadius * 2);
  
        // Pick a new font size so it will not be larger than the height of label.
        var fontSizeToUse = Math.min(newFontSize, elementHeight);
  
        //Set font settings to draw it correctly.
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
        var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
        ctx.font = fontSizeToUse+"px " + fontStyle;
        ctx.fillStyle = color;
        
        //Draw text in center
        ctx.fillText(txt, centerX, centerY);
      }
    }
  });

    var graf1 = [];
    var graf2 = [];
    var labels = [];

    //var data = VerBanco( "aceitou", 3 );
    //var resp_2 = VerBanco( "reconciliou", 3 );
    
    var leitura = VerBanco( 0, 5, 0 );  //faz a leitura do mes de forma distinta 
     
    for(var i in leitura) {            
        labels.push(leitura[i].data);
        
        var txt = VerBanco( "aceitou", 6,  labels[i] ); 
        for(var j in txt) {            
          graf1.push(txt[j].quant);
                    }
        var txt = VerBanco( "reconciliou", 6,  labels[i] ); 
        for(var j in txt) {            
          graf2.push(txt[j].quant);
                    }

        labels[i] = labels[i].substring(4, 6)+"/"+labels[i].substring(0, 4);
  //      console.log(labels[i] + graf1[i])
    }
         
          labels.reverse();
          graf1.reverse();
          graf2.reverse();
          
     //     console.log(labels);
    
  var primeiroGrafico = document.getElementById('Grafico');
  var ctx = primeiroGrafico.getContext("2d");
  ctx.canvas.width = 250;
  ctx.canvas.height = 100;
    
  var Grafico = new Chart(primeiroGrafico, {
          type: 'bar',
          data: {
              labels: labels, 
              datasets: [{
              label: "Aceitou",
              data: graf1,
              backgroundColor: "rgba(250, 150, 150, 0.9)",
              borderColor: "#000"
          },
          {
              label: "Reconciliou",
              data: graf2,
              backgroundColor: "rgba(250, 250, 100, 0.9)",
              borderColor: "#002200"
          }
              ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
              legend: {
              position: 'bottom',
            },
            title: {
                display: true,
                text: 'Aceitaram e Reconciliaram',
                fontSize: 20,
                padding: 30
               
            },
            layout: {
              padding: {
                  left: 10,
                  right: 10,
                  top: 0,
                  bottom: 0
              }
          },
            scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }],
              xAxes: [{
                categoryPercentage: 0.7,
                barPercentage: 0.7
            }],
          }
        }
        });
       

        labels = [];
        graf1 = [];
        ano = [];
        var totls;

        var leitura = VerBanco( 0, 7, 0 );  //faz a leitura do mes de forma distinta 
        for(var i in leitura) {            
          labels.push(leitura[i].funcao);
          graf1.push(leitura[i].quant);
          ano = (leitura[1].ano);   }
  
          totls = somarValores(graf1);
  }

  function grafico2()
  {
    var canvas = document.getElementById("GraficoPizza");
    var ctx = canvas.getContext("2d");
    ctx.canvas.width = 250;
     ctx.canvas.height = 210;

    var graf1 = [];
    var graf2 = [];
    var labels = [];

        var leitura = VerBanco( 0, 7, 0 );  //faz a leitura do mes de forma distinta 
        for(var i in leitura) {            
          labels.push(leitura[i].funcao);
          graf1.push(leitura[i].quant);
          ano = (leitura[1].ano);
        
                }
  
        //    labels[i] = labels[i].substring(4, 6)+"/"+labels[i].substring(0, 4);
          
  
          totls = somarValores(graf1);
  
        let chartt = new Chart(GraficoPizza, {
          type: 'doughnut',
          data: {
              labels: labels, 
              datasets: [{
              label: "Aceitou",
              data: graf1,
              backgroundColor: [
                              'rgba(255, 99, 132, 0.9)',
                              'rgba(250, 250, 100, 0.95)',
                              'rgba(255, 206, 86, 0.9)',
                              'rgba(75, 192, 192, 0.9)'],
                  borderColor: "#fff"
              },
              ]
            },
           options: {
            elements: {
              center: {
                text: totls,
                color: '#ababab', // Default is #000000
                fontStyle: 'Arial', // Default is Arial
                sidePadding: 15 // Defualt is 20 (as a percentage)
              }
            },
            
              responsive: true,
              maintainAspectRatio: false,
              legend: {  //AJUSTES DAS LEGENDAS
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: "#000",   
                    boxWidth: 14,
                    fontFamily: 'arial'
                }
            },
              title: { //AJUSTE DO TITULO
                display: true,
                //text: 'Total em ' + ano +  ': ' + totls + ' pessoas',
                text: 'Aceitaram/Reconciliaram',
                fontSize: 20,
                padding: 30
              },
                animateScale: true,
                animateRotate: true,
               
                tooltips: {
                  model: 'label',
                   callbacks: {
                     label: function(tooltipItem, data) {
                       var dataset = data.datasets[tooltipItem.datasetIndex];
                       var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                         return parseInt(previousValue) + parseInt(currentValue);
                       });
                       var currentValue = dataset.data[tooltipItem.index];
                     //  console.log(currentValue);
                       var percentage = Math.floor(((currentValue/total) * 100)+0.5);         
                     //  console.log(percentage);
                       //return labels[tooltipItem.index] + ": " + percentage + "% Equivale à: " + currentValue ;
                       return "Total: " + currentValue ;
                       
                     }
                 }
                },

                plugins:{
                  datalabels: {
                      formatter: function(value, ctx) {
                          let sum = 0;
                         // console.log(value);
                          let dataArr = ctx.chart.data.datasets[0].data;
                          dataArr.map(data => {
                              sum += parseInt(data);
                          //    console.log(sum);
                          });
                          let percentage = (value * 100 / sum).toFixed(0) + "%";
                        
                          return percentage;
                      },
                      font: {
                           weight: "normal"
                      },
                      color: "#000"
                  }
                    }
              },
              layout: {
                padding: {
                    left: 10,
                    right: 10,
                    top: 00,
                    bottom: 0
                }
              }, 
            
              
             
       
          })
        }       
      
function graficoBatizado()
  {
    var canvas = document.getElementById("GraficoBatizado");
    var ctx = canvas.getContext("2d");
    ctx.canvas.height = 220;
    var graf1 = [];
    var batizado = [];
    var labels = [];
    var labels_bat = [];

        var leitura = VerBanco( 0, 8, 0 );  //faz a leitura do mes de forma distinta 
        for(var i in leitura) {            
          labels.push(leitura[i].funcao);
          batizado.push(leitura[i].quant);
          ano = (leitura[1].ano);
                } 
  
          totls = somarValores(batizado);

                 
          
        let GraficoBatizado = canvas.getContext('2d');
  
        let chartt = new Chart(GraficoBatizado, {
          type: 'doughnut',
          data: {
               
              datasets: [
              {
                label: "Batizados",
                data: batizado,
                backgroundColor: [
                                'rgba(255, 206, 86, 0.9)',
                                'rgba(75, 192, 192, 0.9)'],
                    borderColor: "#fff"
                },
              ],
              labels: labels,
            },
           options: {
            elements: {
              center: {
                text: totls,
                color: '#ababab', // Default is #000000
                fontStyle: 'Arial', // Default is Arial
                sidePadding: 15 // Defualt is 20 (as a percentage)
              }
            },
            
              responsive: true,
              maintainAspectRatio: false,
              legend: {  //AJUSTES DAS LEGENDAS
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: "#000",   
                    boxWidth: 14,
                    fontFamily: 'arial'
                }
            },
              title: { //AJUSTE DO TITULO
                display: true,
                text:'Batizados/ Não Batizados',
               // text: 'Pessoas Batizadas '+ ano +  ': ' + totls + ' pessoas',
                fontSize: 20,
                padding: 30
              },
                animateScale: true,
                animateRotate: true,
               
                tooltips: {
                  model: 'label',
                   callbacks: {
                     label: function(tooltipItem, data) {
                                     
                      //console.log(data.labels); 
                       var dataset = data.datasets[tooltipItem.datasetIndex];
                       var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                         return parseInt(previousValue) + parseInt(currentValue);
                       });
                       var currentValue = dataset.data[tooltipItem.index];
                     //  console.log(currentValue);
                       var percentage = Math.floor(((currentValue/total) * 100)+0.5);         
                     //  console.log(percentage);
                       //return labels[tooltipItem.index] + ": " + percentage + "% Equivale à: " + currentValue ;
                       return "Total: " + currentValue ;
                       
                     }
                 }
                },

                plugins:{
                  datalabels: {
                      formatter: function(value, ctx) {
                          let sum = 0;
                         // console.log(value);
                          let dataArr = ctx.chart.data.datasets[0].data;
                          dataArr.map(data => {
                              sum += parseInt(data);
                          //    console.log(sum);
                          });
                          let percentage = (value * 100 / sum).toFixed(0) + "%";
                        
                          return percentage;
                      },
                      font: {
                           weight: "normal"
                      },
                      color: "#000"
                  }
                    }
              },
              layout: {
                padding: {
                    left: 10,
                    right: 10,
                    top: 00,
                    bottom: 0
                }
              },       
          })
        }      
        
        

  function cem( cem ){
          var retorno;
          $.ajax({
             url:    "relatorioDB.php",
             type:   "get",
             dataType: "json",
             data:   { selec: "10" , mes: cem, funcao: "0"},
             async: false})
             .done(function( data ) {
            // success: function( data ){
                 retorno = data;    
                 var j = '0';
                 var ka= '0';
                 for(var i=0;data.length>i;i++){
                  //Adicionando registros retornados na tabela
                   
                    console.log(ka);
                      
                    $('<div>', { id: data[i].supervisao, class: 'col border bg-light min-height-100'}).appendTo('#membros'+[ka]);
                         document.getElementById(data[i].supervisao).innerHTML = "<h3>" + data[i].supervisao +"</h3>"+ "\n" +"<h2 id='fonte'>"+ data[i].quant_membros+"</h2>";
                         if(++j >= '4')
                         {   j='0';
                             ka++;
                             
                         }
                       
                  
                        }
                                    
             });
           
               
             return retorno;
         }
         