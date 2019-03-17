<?php
    if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
    include_once("../../_fonts/config/banco.php");
    include_once("../../_fonts/config/funcoes.php");
    

    //Conectando ao banco de dados
    $con = new mysqli("localhost", "root", "", "db_igreja");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

    $nome = 1;//$_POST['nome'];
    $idCursos = 2;

  /*  $sql = "SELECT membros.nome	FROM turma INNER JOIN membros
           ON turma.alunos = membros.idmembros INNER JOIN infocursos
           ON turma.curso = infocursos.idCursos WHERE infocursos.idCursos like $idCursos";
*/
$sql = "SELECT * from membros
where idmembros not in (select alunos
from turma) ORDER BY nome ASC" ;     
    
    //Consultando banco de dados
    $qryLista = mysqli_query($con, $sql);    
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    //var_dump (json_encode($vetor));
    
?>