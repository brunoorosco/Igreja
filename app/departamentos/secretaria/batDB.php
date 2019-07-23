<?php
    include_once("../../../_fonts/config/funcoes.php");
	include_once('../../../_fonts/config/banco.php');
        
    //Conectando ao banco de dados
     $id = $_POST['funcao'];
    // query para quem participa do curso
     $sql = "SELECT batizando.nome, cem.nome_cem, eventos.titulo, eventos.inicioevento FROM batizando 
     INNER JOIN cem ON batizando.cem = cem.id 
     INNER JOIN eventos ON batizando.batismo = eventos.id WHERE eventos.id = '$id' 
     ORDER BY batizando.nome ASC";
     
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