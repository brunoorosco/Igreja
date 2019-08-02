<?php
//setting header to json
//header('Content-Type: application/json');
if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../../_fonts/config/banco.php';
require_once '../../../_fonts/config/funcoes.php';
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

$selec = $_GET['selec'];
$func = $_GET['funcao'];
$cad_equipe = $_GET['fulano']; 
$mes = "";


switch ($selec){
      case 1: 
          carrega_equipe();
          break;

       case 2:
          equipe();
       break;

       case 3:
            cem();
       break;

       case 4:
            membros($func);
      break;

       case 5:
            labels();
      break;

       case 6:
            lab($func, $mes);
      break;

       case 7:
            total($mes);
         break;

       case 8:
            quant_equipe();
         break;

      case 9:
            cadastra_equipe($cad_equipe);//função para cadastrar a equipe nos encontros          

      break;
      
      case 10:
           cadastro_batizando();

      break;

      case 11:
         encontrista();
      break;

      case 12:
         consulta_cem_babtizando($func);
      break;



       default:
       return false;
       break;

}




function carrega_equipe()//responsavel por carregar equipe já cadastrada
{
    $pdo = Banco::conectar();
    $data = array();
    // $soma = $pdo->query("SELECT SUM(alunos) AS total FROM turma where curso='2'")->fetchColumn(); //soma os valores dos itens da celulas
    //$sql = "SELECT   alunos, COUNT(alunos) AS Qtd FROM  turma GROUP BY alunos HAVING  COUNT(alunos) > 1 ORDER BY COUNT(alunos) DESC";
    $sql_= "SELECT membros.idmembros as id, membros.nome as equipe, info_encontro.n_encontro FROM equipe 
    INNER JOIN membros ON equipe.membro = membros.idmembros 
    INNER JOIN info_encontro ON equipe.encontro = info_encontro.id GROUP by membros.nome";

    foreach($pdo->query($sql_)as $row)
        {       
                $data[] = $row;
              }
     print json_encode($data);
}

function equipe(){
        //tarefaENC -> reppresenta tarefa que o membro vai exercer
  $pdo = Banco::conectar();
  $data = array();
  $sql_= "SELECT equipe, tarefaEnc	FROM equipe";
  $sql_= "SELECT membros.idmembros as id, membros.nome as equipe, info_encontro.n_encontro, tarefaEnc as tarefa FROM equipe 
  INNER JOIN membros ON equipe.membro = membros.idmembros 
  INNER JOIN info_encontro ON equipe.encontro = info_encontro.id 
  INNER JOIN tarefas_equipe ON equipe.tarefaEnc = tarefas_equipe.id GROUP by membros.nome";
  
  foreach($pdo->query($sql_)as $row)
      {       
         $data[] = $row;
      }
     
   print json_encode($data);
   }
   



function cem(){

   $pdo = Banco::conectar();
   $data = array();

   $sql= " SELECT _status FROM config_sistem where funcao='filtro_membros'";
   $filtro = $pdo->query($sql)->fetch();
   $fil = $filtro[0];
             
   
   $sql_= "SELECT DISTINCT(supervisao) as cem FROM membros group by supervisao HAVING COUNT(supervisao) > '$fil'";
   
   foreach($pdo->query($sql_)as $row)
      {       
         $data[] = $row;
      }
      $pdo=null;   
   //echo $row['funcao'];
   
   // print ($data[0]);
   print json_encode($data);
   
   }

   function quant($funcao){

      $pdo = Banco::conectar();
      $data = array();
      $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant	FROM aceita_jesus where aceit_reconc='$funcao' GROUP BY aceit_reconc";
      
      foreach($pdo->query($sql_)as $row)
          {       
             $data[] = $row;
          }
    
         print $row['quant'];       
       }

      function labels(){
      $pdo = Banco::conectar();
      $data = array();
      $sql_ = "SELECT EXTRACT(YEAR_MONTH FROM cadastro) as data 
                  from aceita_jesus GROUP BY EXTRACT(YEAR_MONTH FROM cadastro)  
                     ORDER BY EXTRACT(YEAR_MONTH FROM cadastro) DESC LIMIT 3";   
      foreach($pdo->query($sql_)as $row)
          {       
             $data[] = $row;
          }
    
          print json_encode($data);
        

       } 

       function lab($funcao, $month){
         $pdo = Banco::conectar();
         $data = array();
         $sql_ = "SELECT  aceit_reconc as funcao, COUNT(aceit_reconc) as quant from aceita_jesus 
                     WHERE  EXTRACT(YEAR_MONTH FROM cadastro) = '$month' AND aceit_reconc = '$funcao'  
                     GROUP BY EXTRACT(YEAR_MONTH FROM cadastro), aceit_reconc";   
                           
        foreach($pdo->query($sql_)as $row)
             {    
         $data[] = $row;
         
          } 
          print json_encode($data);
         
         }      

      function total($funcao){

         $pdo = Banco::conectar();
         $data = array();
         $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant, YEAR(cadastro) as ano FROM aceita_jesus where YEAR(cadastro)>'2018' GROUP BY aceit_reconc";
         
         foreach($pdo->query($sql_)as $row)
            {       
               $data[] = $row;
            }
      
         //  echo $row['funcao'];
         
         // print ($data[0]);
         print json_encode($data);
         
         }
   
      function quant_equipe(){

         $encontro = id_encontro_atual();
         
         $pdo = Banco::conectar();
         $data = array();
         $sql_= "SELECT COUNT(membro) as quant_equipe FROM equipe where encontro = '$encontro'";
         
         foreach($pdo->query($sql_)as $row)
            {       
               $data[] = $row;
            }
      
         // echo $row['funcao'];
         
         // print ($data[0]);
         print json_encode($data);
         
         }
         
         function membros($member){
            $pdo = Banco::conectar();
            $data = array();
    
            
            //$sql_= "SELECT  DISTINCT supervisao , COUNT(idmembros) as quant_membros  FROM membros GROUP BY supervisao";
            $sql_= "SELECT idmembros as id, nome  FROM membros where idmembros not in (SELECT membro FROM equipe) AND supervisao='$member' order by nome";
           
            
            foreach($pdo->query($sql_)as $row)
               {       
                  $data[] = $row;
               }
               $pdo=null;   
            //echo $row['funcao'];
            
            // print ($data[0]);
            print json_encode($data);
            
            }
   
         function encontrista(){

            $pdo = Banco::conectar();
            $data = array();

            $sql= " SELECT _status FROM config_sistem where funcao='filtro_membros'";
            $filtro = $pdo->query($sql)->fetch();
            $fil = $filtro[0];
                                 
            $sql_ = "SELECT DISTINCT encontrista.CEM as supervisao, COUNT(encontrista.idEncontrista) as quant_encontrista FROM encontro INNER JOIN encontrista  ON encontro.encontrista = encontrista.idEncontrista     
            WHERE encontro.n_encontro = '130' group BY encontrista.CEM ";
            
            foreach($pdo->query($sql_)as $row)
               {       
                  $data[] = $row;
               }
               $pdo=null;   
            //echo $row['funcao'];
            
            // print ($data[0]);
            print json_encode($data);
            
            }
   
            //////cadastrado da equipe no encontro
         function cadastra_equipe($membro){

               $tarefa_padrao = 1;
               $encontro = id_encontro_atual();

               $pdo = Banco::conectar();
               $data = array();
               $sql_= "INSERT INTO equipe(membro, encontro, tarefaEnc) VALUES (:membro, :encontro, :tarefaEnc) ";
               
               $stmt = $pdo->prepare($sql_);
               $stmt->bindParam(':membro',$membro);
               $stmt->bindParam(':encontro',$encontro);
               $stmt->bindParam(':tarefaEnc',$tarefa_padrao);
               $stmt->execute();
               $pdo = null;
            
               echo json_encode(array("mens"=>"cadastrado"));
               
               // print ($data[0]);
            //   print json_encode($data);
               
            }

            function cadastro_batizando(){
               $nome = $_GET['nome'];
               $cem = $_GET['cem_bat'];
               //$cem = "1";
               $sexo = $_GET['sexo'];
               $nasc = $_GET['niver'];
               $nasc = date("Y-m-d",strtotime(str_replace('/','-',$nasc)));
               $bat = $_GET['id_bat'];
               
               $pdo = Banco::conectar();
               
               $sql= "SELECT id FROM cem WHERE nome_cem = '$cem'";
               $filtro = $pdo->query($sql)->fetch();
               $fil = $filtro[0];
                           
               
               $sql_= "INSERT INTO batizando(nome,cem , sexo, aniversario, batismo) VALUES (:nome, :cem, :sexo, :niver, :batismo) ";
               
               $stmt = $pdo->prepare($sql_);
               $stmt->bindParam(':nome',$nome);
               $stmt->bindParam(':cem',$fil);
               $stmt->bindParam(':sexo',$sexo);
               $stmt->bindParam(':niver',$nasc);
               $stmt->bindParam(':batismo',$bat);
               $stmt->execute();
               $pdo = null;
                   
               echo json_encode(array("mens"=>"1"));
            }

            function consulta_cem_babtizando($batismo){

               $pdo = Banco::conectar();
               $data = array();
     
               $sql_ = "SELECT DISTINCT cem.nome_cem as cem, count(batizando.id) as quant_bat FROM batizando 
                              INNER JOIN  cem ON batizando.cem = cem.id
                                    WHERE batismo = '$batismo'  group BY cem.nome_cem";
               
               foreach($pdo->query($sql_)as $row)
                  {       
                     $data[] = $row;
                  }
                  $pdo=null;   
               //echo $row['funcao'];
               
               // print ($data[0]);
               print json_encode($data);
               
               }
         
               
        
?>
