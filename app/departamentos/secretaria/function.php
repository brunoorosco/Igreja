
<?php
#esse arquivo irá devolver resultados de preenhimento automatico dos batizandos
    header("content-type: application/json");
    include_once("../../../_fonts/config/funcoes.php");
	include_once('../../../_fonts/config/banco.php');
        
    //Conectando ao banco de dados
    
    
    $nome = $_GET['nome'];
    // query para quem participa do curso
     $sql = "SELECT supervisao, nasc FROM membros where nome='$nome'";
   
     
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