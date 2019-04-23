<?php
//setting header to json
header('Content-Type: application/json');
if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';

$selec = $_GET['selec'];
$func = $_GET['funcao'];

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
     print json_encode($data);
}

function aceitou($funcao){

  $pdo = Banco::conectar();
  $data = array();
  $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant	FROM aceitoujesus where aceit_reconc='$funcao' GROUP BY aceit_reconc";
  
  foreach($pdo->query($sql_)as $row)
      {       
         $data[] = $row;
      }
     
   print json_encode($data);
   }
   

function fun($funcao){

  $pdo = Banco::conectar();
  $data = array();
  $sql_= "SELECT aceit_reconc as funcao, COUNT(aceit_reconc) as quant	FROM aceitoujesus where aceit_reconc='$funcao' GROUP BY aceit_reconc";
  
  foreach($pdo->query($sql_)as $row)
      {       
         $data[] = $row;
      }

     echo $row['funcao'];
     
  // print ($data[0]);
   //print json_encode($data);
   
   }




?>
