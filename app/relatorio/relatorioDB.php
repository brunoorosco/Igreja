<?php
//setting header to json
header('Content-Type: application/json');
if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';



//é preciso contar a quantidade de registros dentro do mes para carregar o grafico
//$query = sprintf("SELECT playerid, score FROM score ORDER BY playerid");


$pdo = Banco::conectar();
$sql = 'SELECT  alunos, curso FROM turma ';
$data = array();

// $soma = $pdo->query("SELECT SUM(alunos) AS total FROM turma where curso='2'")->fetchColumn(); //soma os valores dos itens da celulas
//$sql = "SELECT   alunos, COUNT(alunos) AS Qtd FROM  turma GROUP BY alunos HAVING  COUNT(alunos) > 1 ORDER BY COUNT(alunos) DESC";

$sql_ = "SELECT curso, COUNT(alunos) AS 'alunos'  FROM turma GROUP BY curso";

foreach($pdo->query($sql)as $row)
  	{       
            $data[] = $row;
          }

   
foreach($pdo->query($sql_)as $row)
{       
        $data[] = $row;
      }       
$pdo = Banco::desconectar();

//imprime em formato json para o js
//print_r ($data);
print json_encode($data);

?>
