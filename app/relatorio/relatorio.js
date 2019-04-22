var teste;

$(document).ready(function(){
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
      
    $.ajax({
      url: "./relatorioDB.php?selec=2&funcao="+funcao,
      method: "GET",
      success: function(data) {
    
        var func = [];
        var n_pessoas = [];
       
        for(var i in data) {
          func.push(data[i].funcao);
          n_pessoas.push(data[i].quant);
        }
         var texto = JSON.stringify({funcao: +func ,quantidade: +n_pessoas});
         var texto_json = JSON.stringify(texto);

        
          return texto;

       },
      error: function(data) {
        //console.log(data);
      }
    });


  }

  $(document).ready(function(){

     console.log(relatorio_banco(aceitou));

     var texto = relatorio_banco(aceitou);
     var func = [];
     var quant = [];
     
      for(var i in texto) {
        func.push(texto[i].funcao);                   
        quant.push(texto[i].quant);
        }

       

        var chartdata = {
          labels: func,  //pega as informações oriundas de turma push
          datasets : [{
              label: 'Alunos',
              backgroundColor: 'rgba(50, 50, 50, 0.75)',
              borderColor: 'rgba(200, 100, 100, 0.75)',
              hoverBackgroundColor: 'rgba(200, 100, 100, .75)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: quant,
            }]          
        };
  
        var ctx = $("#encontro");
  
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata,
          options: {
            title: {
                display: true,
                text: 'Encontros'
            }
        }
       });
    });