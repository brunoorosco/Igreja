<?php
require_once '../../_fonts/config/banco.php';
require_once '../../_fonts/config/funcoes.php';

    $x= 1;
    //$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $cem = filter_input(INPUT_POST , 'cem');
    
     $pdo = Banco::conectar();

    //$sql_ = "INSERT INTO teste (nome) values (:nome)"; 
    $sql_ = "SELECT * FROM membros where supervisao = '$cem' ORDER BY nome ASC";
    try{
         foreach($pdo->query($sql_)as $row)
             {
                echo $x++.' - '.$row['nome'].';';
             }  

    }catch(PDOException $e){
        //echo '{"erro": {"texto": '.$e->getMessage().'}';
        echo '{"erro": {"texto": '.$e->getMessage().'}';
    }


	?>
