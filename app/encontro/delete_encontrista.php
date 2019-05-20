<?php
  if(!isset($_SESSION))session_start(); //verifica se a sessão aberta
    include_once("../../_fonts/config/banco.php");
    include_once("../../_fonts/config/funcoes.php");
    
    $nome = $_GET['name'];
    $cem = $_GET['cem'];
         
            $sql = " DELETE FROM encontrista WHERE nomeEnc = :encontrista AND cem = :cem";
  		try{
   ///////  DELETA USUARIO //////////       
		  $db = new db();
          $db = $db->connect();
          $stmt = $db->prepare($sql);
          $stmt->bindParam(':encontrista', $nome); 
          $stmt->bindParam(':cem', $cem); 
          $stmt->execute();
                  
          if ($stmt->rowCount() > 0)
          echo json_encode("$nome");
           
				
		    }
        catch(PDOException $e){

		          echo '{"erro": {"texto": '.$e->getMessage().'}';
		          }
?>
