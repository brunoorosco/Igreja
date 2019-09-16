<?php

require_once 'banco.php';
require_once 'funcoes.php';
header('Content-Type: text/html; charset=utf-8');


if(!isset($_SESSION))session_start(); //verifica se a sessão aberta

  // Verifica se a variável $_POST['nome'] existe
  if (isset($_POST['nomeProc']) AND isset($_POST['dataProc'])) {
    // Verifica se o usuário digitou o seu nome
    if (!empty($_POST['nomeProc'])) {
      $nome = $_POST['nomeProc'];
      $niver = date("Y-m-d",strtotime(str_replace('/','-',$_POST['dataProc'])));
     // echo 'Seja bem-vindo(a) ' . $nome . '!';
    } else {
      echo json_encode(array('nome' => "Preencha todos os campos" ));//mens3 = representa que usuario já existe no banco
  
    }
  } else {
      echo json_encode(array('nome' => "Preencha todos os campos" ));//mens3 = representa que usuario já existe no banco
  }
//$nome = $_POST['nomeProc'];


///////  BUSCA INFORMAÇÃO DE CURSOS REALIZADOS //////////       
    $pdo = Banco::conectar();
    $data = array();
 //   $sql_= "SELECT * FROM historico WHERE nome LIKE '$nome%' ";
  //  $sql = "SELECT curso, COUNT(alunos) AS 'alunos'  FROM turma GROUP BY curso";//funcionando
    $sql_= "SELECT infocursos.tema as curso, status, infocursos.data_, historico.nome, membros.nasc FROM historico 
    INNER JOIN infocursos  ON infocursos.idCursos = historico.curso
    INNER JOIN  membros ON membros.nome = historico.nome
    where historico.nome LIKE '$nome%' AND membros.nasc = '$niver'
    GROUP BY infocursos.tema";
    
    foreach($pdo->query($sql_)as $row)
        {       
                $data[] = $row;
              }
              $pdo=null;   
     print json_encode($data);
        
        
?>