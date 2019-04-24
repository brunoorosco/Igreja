
$(document).ready(function(){
  var funcao;
  

  request.done(function(resposta) {
  //  funcao = resposta;   
});
  
      var resp_1 = VerBanco( "aceitou" );
      var resp_2 = VerBanco( "reconciliou" );
       
       //console.log(teste);

       //loadData( "3", "aceitou", function (response) {console.log(response);});
      

  let primeiroGrafico = document.getElementById('Grafico').getContext('2d');
    
  let chart = new Chart(primeiroGrafico, {
     type: 'bar',
     data: {
         labels: ["mar"], 
         datasets: [{
         label: resp_1,
         data: [" "],
         backgroundColor: "rgba(0, 34,255, 0.3)",
         borderColor: "#0000ff"
     },
     {
         label: resp_2,
         data: [''],
         backgroundColor: "rgba(0, 255, 0, 0.3)",
         borderColor: "#002200"
     }
        ]
     }
  });





   $.ajax({
      url: "./relatorioDB.php?selec=1",
      method: "GET",
      success: function(data) {
      //  console.log(data);
        var turma = [];
        var n_alunos = [];
        var tamanho = turma.length;
        for (var pos = 0; pos < turma.length; pos++) { 
          console.log(turma[pos]);
                  }

        //console.log(tamanho);
      //  console.log(n_alunos);

        for(var i in data) {
          turma.push(data[i].curso);
          n_alunos.push(data[i].alunos);
        }
  
        var chartdata = {
          labels: turma,  //pega as informações oriundas de turma push
          datasets : [{
              label: 'Alunos',
              backgroundColor: 'rgba(50, 50, 50, 0.75)',
              borderColor: 'rgba(200, 100, 100, 0.75)',
              hoverBackgroundColor: 'rgba(200, 100, 100, .75)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: n_alunos,
            }]          
        };
  
        var ctx = $("#curso");
  
        var barGraph = new Chart(ctx, {
          responsive: true,
          type: 'bar',
          data: chartdata,
          options: {
            title: {
                display: true,
                text: 'Alunos p/ Curso'
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
      },
      error: function(data) {
        //console.log(data);
      }
    });

    
    $.ajax({
      url: "./relatorioDB.php?selec=2",
      method: "GET",
      success: function(data) {
      //  console.log(data);
        var tipo_ = [];
        var tipo_1 = [];
        var quantidade = [];
        var quantidade1 = [];
        
        //console.log(tamanho);
      //  console.log(n_alunos);

        for(var i in data) {
          tipo_.push(data[i].aceitou);                   

          quantidade.push(data[i].quant);
          quantidade1.push(data[i].quant1);
        }
          
        var graf1 = {
          labels: tipo_,  //pega as informações oriundas de turma push
          datasets : [{
              label: 'aceitou',
              backgroundColor: 'rgba(50, 200, 50, 0.75)',
              borderColor: 'rgba(200, 100, 100, 0.75)',
              hoverBackgroundColor: 'rgba(200, 100, 100, .75)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: quantidade,
            }]          
        };

        var graf2 = {
          labels: aceitou,  //pega as informações oriundas de turma push
          datasets : [{
              label: 'Reconciliou',
              backgroundColor: 'rgba(50, 50, 200, 0.75)',
              borderColor: 'rgba(200, 100, 100, 0.75)',
              hoverBackgroundColor: 'rgba(200, 100, 100, .75)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: quantidade,
            }]          
        };
  
        var ctx = $("#aceitou");
  
        var barGraph = new Chart(ctx, {
          scaleBeginAtZero : true,
          type: 'bar',
          data: graf1, 
          options: {
            title: {
                display: true,
                text: 'Aceitou - Reconciliou'
            },
            scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }],
              xAxes: [{
                categoryPercentage: 0.5,
                barPercentage: 0.5
            }],
          }
        }
        });
      },
      error: function(data) {
        //console.log(data);
      }
    });
    
    

  });



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




function VerBanco( str ){
 var retorno;
 $.ajax({
    url:    "relatorioDB.php",
    type:   "get",
    dataType: "html",
    data:   { selec: "3" , funcao: str },
    async: false,

    success: function( data ){
        retorno = data;           
    }
});
return retorno;
}