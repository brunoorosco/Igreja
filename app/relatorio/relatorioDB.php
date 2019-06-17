<?php
//setting header to json
//header('Content-Type: application/json');
if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');

$selec = $_GET['selec'];
$func = $_GET['funcao'];
$mes = $_GET['mes'];


switch ($selec){
      case 1: 
          curso();
          break;

       case 2:
          aceitou($func);
       break;

       case 3:
            fun($func);
       break;

       case 4:
            quant($func);
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
            batizado($func,$mes);
         break;

      case 10:
         membros();
      break;

      case 11:
         encontrista();
      break;

      case 12:
         num_rel_bati($func, $mes);
      break;



       default:
       return false;
       break;

}




function curso(){
    $pdo = Banco::conectar();
    $data = array();
    // $soma = $pdo->query("SELECT SUM(alunos) AS total FROM turma where curso='2'")->fetchColumn(); //soma os valores dos itens da celulas
    //$sql = "SELECT   alunos, COUNT(alunos) AS Qtd FROM  turma GROUP BY alunos HAVING  COUNT(alunos) > 1 ORDER BY COUNT(alunos) DESC";
    $sql = "SELECT curso, COUNT(alunos) AS 'alunos'  FROM turma GROUP BY curso";//funcionando
    $sql_= "SELECT infocursos.tema as curso, COUNT(membros.idmembros) as alunos	FROM turma INNER JOIN membros
             ON turma.alunos = membros.idmembros INNER JOIN infocursos
              ON turma.curso = infocursos.idCursos GROUP BY turma.curso";

    foreach($pdo->query($sql_)as $row)
        {       
                $data[] = $row;
              }
              $pdo=null;   
     print json_encode($data);
}

function aceitou($funcao){

  $pdo = Banco::conectar();
  $data = array();
  $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant	FROM aceita_jesus where aceit_reconc='$funcao' GROUP BY aceit_reconc";
  
  foreach($pdo->query($sql_)as $row)
      {       
         $data[] = $row;
      }
      $pdo=null;   
   print json_encode($data);
   }
   



function fun($funcao){

  $pdo = Banco::conectar();
  $data = array();
  $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant	FROM aceita_jesus where aceit_reconc='$funcao' GROUP BY aceit_reconc";
  
  foreach($pdo->query($sql_)as $row)
      {       
         $data[] = $row;
      }

   //  echo $row['funcao'];
   $pdo=null;   
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
          $pdo=null;   
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
          $pdo=null;   
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
          $pdo=null;   
          print json_encode($data);
         
         }      

       function num_rel_bati($funcao, $month){
         $pdo = Banco::conectar();
         $data = array();
         $sql_ = "SELECT  batizado as funcao, COUNT(aceit_reconc) as quant from aceita_jesus 
                     WHERE  EXTRACT(YEAR_MONTH FROM cadastro) = '$month' AND batizado = '$funcao'  
                     GROUP BY EXTRACT(YEAR_MONTH FROM cadastro), batizado";   
                           
        foreach($pdo->query($sql_)as $row)
             {    
         $data[] = $row;
         
          } 
          $pdo=null;   
          print json_encode($data);
         
         }      

      function total($funcao){

         $pdo = Banco::conectar();
         $data = array();
         $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant, YEAR(cadastro) as ano FROM aceita_jesus where cadastro > DATE_sub(CURDATE(), INTERVAL 90 DAY) GROUP BY aceit_reconc";
         
         foreach($pdo->query($sql_)as $row)
            {       
               $data[] = $row;
            }
            $pdo=null;   
         //  echo $row['funcao'];
         
         // print ($data[0]);
         print json_encode($data);
         
         }
   
      function batizado($funcao, $month){

         $pdo = Banco::conectar();
         $data = array();
         $sql_= "SELECT batizado as funcao, COUNT(batizado) as quant, YEAR(cadastro) as ano FROM aceita_jesus where cadastro > DATE_sub(CURDATE(), INTERVAL 90 DAY) GROUP BY batizado";
         $sql= "SELECT batizado as funcao, COUNT(batizado) as quant from aceita_jesus 
                     WHERE  EXTRACT(YEAR_MONTH FROM cadastro) = '$month' AND batizado = '$funcao'
                     GROUP BY EXTRACT(YEAR_MONTH FROM cadastro), batizado";   
         foreach($pdo->query($sql_)as $row)
            {       
               $data[] = $row;
            }
            $pdo=null;   
      
         // echo $row['funcao'];
         
         // print ($data[0]);
         print json_encode($data);
         
         }
         
         function membros(){

            $pdo = Banco::conectar();
            $data = array();

            $sql= " SELECT _status FROM config_sistem where funcao='filtro_membros'";
            $filtro = $pdo->query($sql)->fetch();
            $fil = $filtro[0];
                      
            
            //$sql_= "SELECT  DISTINCT supervisao , COUNT(idmembros) as quant_membros  FROM membros GROUP BY supervisao";
            $sql_= "SELECT DISTINCT(supervisao), COUNT(supervisao)  as quant_membros  FROM membros group by supervisao HAVING COUNT(supervisao) > '$fil'";
            
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

            $last_encontro=ultimo_encontro();

            //echo $last_encontro;

            $sql_ = "SELECT DISTINCT encontrista.CEM as supervisao, COUNT(encontrista.idEncontrista) as quant_encontrista FROM encontro 
            INNER JOIN encontrista  ON encontro.encontrista = encontrista.idEncontrista     
            WHERE encontro.n_encontro = '$last_encontro' group BY encontrista.CEM ";
            
            foreach($pdo->query($sql_)as $row)
               {       
                  $data[] = $row;
               }
               $pdo=null;   
            //echo $row['funcao'];
            
            // print ($data[0]);
            print json_encode($data);
            
            }
   
/*$sql_ = "SELECT $funcao as funcao, COUNT('$funcao') as quant, EXTRACT(YEAR_MONTH FROM cadastro) as ano
               FROM aceita_jesus 
                     where cadastro > DATE_sub(CURDATE(), INTERVAL 90 DAY) 
                           GROUP BY EXTRACT(YEAR_MONTH FROM cadastro), '$funcao'";*/
    
?>
