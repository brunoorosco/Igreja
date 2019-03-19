<?php
    if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
    include_once("../../_fonts/config/banco.php");
    include_once("../../_fonts/config/funcoes.php");
    

    //Conectando ao banco de dados
    $con = new mysqli("localhost", "root", "", "db_igreja");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

    $sql = "SELECT infocursos.nomeCursos, membros.nome, membros.idmembros	FROM turma INNER JOIN membros
    ON turma.alunos = membros.idmembros INNER JOIN infocursos
    ON turma.curso = infocursos.idCursos WHERE infocursos.idCursos ORDER BY membros.nome ASC";
    
    //Consultando banco de dados
    $qryLista = mysqli_query($con, $sql);    
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    //var_dump (json_encode($vetor));
    
?>