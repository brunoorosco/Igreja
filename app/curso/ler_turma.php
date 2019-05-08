<?php
    
    if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
    include_once("../../_fonts/config/banco.php");
    include_once("../../_fonts/config/funcoes.php");
    

    //Conectando ao banco de dados
     $idCursos = $_POST['curso'];
// query para quem participa do curso
    $sql = "SELECT infocursos.nomeCursos, membros.nome, membros.idmembros	FROM turma INNER JOIN membros
    ON turma.alunos = membros.idmembros INNER JOIN infocursos
    ON turma.curso = infocursos.idCursos WHERE infocursos.idCursos = $idCursos ORDER BY membros.nome ASC";
    
    //Consultando banco de dados
    
    $db = new db();
    $db = $db->connect();
    foreach($db->query($sql) as $row)
        {
            $vetor[] = $row;
        }
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    //var_dump (json_encode($vetor));
    
?>